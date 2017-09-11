<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Session,Redirect;
use App\Models\User;
use App\Models\Article;
use App\Models\Article_tags;
use App\Models\Article_comment;
use App\Models\Article_collections;
use App\Models\Article_replies;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function article_index($page = '')
    {
        $article = new Article;
        $collection = new Article_collections;
        $comment = new Article_comment;

        $login_id = \Session::get('login_id');
        //获取所有审核通过的手记文章
        $article_all = $article->where('status', '>', 0)->get()->groupBy('status');
        //获取创建手记所有用户信息
        $articles_userinfo = $this->get_info();

        //首页手记分页
        if (empty($page)) {
            $page = 1;
            $prefix = '';
        } else {
            $prefix = '.';
        }
        $articles = $article->where('status', 1)->get();
        $limit = 1;
        $page_total = ceil(count($articles)/$limit);

        $page = $page > $page_total ? $page_total : $page;
        $page = $page < 1 ? 1 : $page;
        
        $articles_page = $articles->forPage($page, $limit)->all();
        //获取置顶手记
        $article_top = $article_all['3']->first();
        //获取置顶侧边手记
        $article_right = $article_all['4']->toArray();
        $login_info = [];
        //获取当前登录用户个人信息 发布手记数量 推荐数 以及评论数
        if ($login_id) {
            $login_info = $this->get_userinfo($login_id);
        }
        
        //获取标签信息
        $tags_arr = [];
        //标签风向标 按手记篇数排序
        $tags_order = Article_tags::orderBy('tag_num','desc')->get()->toArray();
        //所有标签
        $tags = Article_tags::all()->toArray();
        $new_tags = array_combine(array_column($tags, 'id'), $tags);
        foreach ($article_right as $k => $v) {
            $tag_id = explode(',', $v['tag_id']);
            foreach ($tag_id as $key => $value) {
                $article_right[$k]['tags'][$value] = $new_tags[$value]['tag_name'];
            }
        }

        //获取月度热门手记
        // $hot_articles = $this ->get_hot_articles('all');

        $count = count($tags);
        for ($i=0; $i < $count; $i++) {
            if($i < 9){
                $tags_arr['show'][] =  $tags[$i];
            } else {
                $tags_arr['hidden'][] = $tags[$i];
            }
            if ($i < 10) {
                $tags_arr['order'][] = $tags_order[$i];
            }
        }
        // dd($articles_page);return;
        return view('Home.article.article_index',[
            'articles' => $articles_page,
            'page' => $page,
            'prefix' => $prefix,
            'page_total' => $page_total,
            'tags' => $tags_arr,
            'login_info' => $login_info,
            'userinfo' => $articles_userinfo,
            'article_top' => $article_top,
            'article_right' => $article_right,
        ]);

    }

    /**
     * 手记文章添加方法
     */
    public function article_add()
    {
        //验证登录状态
        $check = $this ->check_login();
        if ($check == 3) {
            return Redirect::to('/login_index');
        }

        $tags = Article_tags::all();

        return view('Home.article.article_add',['tags'=>$tags]);
    }

    /**
     * 手记文章添加执行
     * @param  Request $request 
     */
    public function article_insert(Request $request)
    {
        //验证登录状态
        $check = $this ->check_login();
        if ($check == 3) {
            return Redirect::to('/login_index');
        }

        $article = new Article;
        $article->title = $request->input('title');
        $tags = $request->input('tags');
        $file = $request->file('file');

        if(!is_null($request->input('original'))){
            $article->is_original = 1;
        }
        //图片上传
        if (isset($file)) {
            if ($file->isValid()) {
                $dir = './uploads';
                $filename = time() . mt_rand(1000,9999) . '.' . $file->getClientOriginalExtension();

                $file->move($dir, $filename);

                $article->img_path = $filename;
            }
        }
        $article->tag_id = $tags;
        $article->content = $request->input('content');
        $article->user_id = \Session::get('login_id');
        $article->add_time = time();

        //事务处理
        DB::beginTransaction();
        try{
            //文章数据入库
            $res = $article->save();
            //处理标签数据 并修改标签表num字段
            $tags_arr = explode(',', $tags);
            Article_tags::whereIn('id',$tags_arr)->increment('tag_num');
            DB::commit();
        }catch (\Exception $e){
            //回滚
            DB::rollBack();
        }
        if ($res) {
            return Redirect::to('article_index');
        } else {
            return '发布失败';
        }
    }

    /**
     * 手记文章详情页
     */
    public function article_info($id)
    {
        $article = new Article;
        $comment = new Article_comment;
        $user = new User;
        $collection = new Article_collections;
        $login_id = \Session::get('login_id');

        //浏览量增加
        $article->where('id', $id)->increment('browser');

        //获取当前用户信息
        $login_info = [
            'login_id' => $login_id,
            'email' => \Session::get('email'),
        ];

        //获取文章详情
        $info = $article->where('id', $id)->first();
        //获取用户是否推荐
        $collection_info = $collection->where('article_id', $id)->where('user_id', $login_id)->first();
        $is_collection = $collection_info ? 1 : 0;
        //获取作者信息
        $userinfo = $user->where('id', $info['user_id'])->first()->toArray();
        $info['userinfo'] = $userinfo;
        //获取作者热门文章
        $hot_articles = $article->where('user_id', $info['user_id'])->orderBy('collection_num', 'desc')->limit(3)->get();

        $info['article_num'] = $article->where('user_id', $info['user_id'])->count();

        //处理标签信息
        $tags = explode(',', $info['tag_id']);
        $tags_name = Article_tags::whereIn('id', $tags)->lists('tag_name', 'id');

        //获取评论信息
        $comments_arr = [];
        $comments = $comment->where('art_id',$id)->get();

        $comments_arr = $comments->toArray();
        if (!empty($comments_arr)) {
            $c_id = array_column($comments_arr, 'id');
            //获取评论人ID
            $comment_user_id = array_column($comments_arr, 'user_id');
            
            $comments_arr = array_combine($c_id, $comments_arr);
            // dd($comments_arr);return;
            //获取回复内容
            $replies = Article_replies::whereIn('comment_id', $c_id)->get();

            $replies_arr = $replies->toArray();

            $reply_from_user_id = array_column($replies_arr, 'from_user_id');

            $reply_to_user_id = array_column($replies_arr, 'to_user_id');

            $user_id = $this->unique(array_merge($comment_user_id, $reply_from_user_id, $reply_to_user_id));
            
            //获取评论人信息
            $users = $user->whereIn('id', $user_id)->lists('email','id')->toArray();

            foreach ($replies_arr as $key => $value) {
                $replies_arr[$key]['from_user'] = $users[$replies_arr[$key]['from_user_id']];
                $replies_arr[$key]['to_user'] = $users[$replies_arr[$key]['to_user_id']];
            }
            foreach ($replies_arr as $key => $value) {
                foreach ($comments_arr as $k => $v) {
                    if ($value['comment_id'] == $k) {
                        $comments_arr[$k]['reply'][] = $value;
                    }
                }
            }

            foreach ($comments_arr as $key => $value) {
                $comments_arr[$key]['userinfo'] = $users[$value['user_id']];
            }
        }

        return view('Home.article.article_info',[
            'info' => $info,
            'tags' => $tags_name,
            'comments' => $comments_arr,
            'hot' => $hot_articles,
            'is_collection' => $is_collection,
            'login_info' => $login_info,
        ]);
    }

    /**
     * 手记评论添加
     */
    
    public function comment_add(Request $request)
    {
        // return $request->all();
        //验证登录状态
        $check =  $this->check_login();
        if ($check == 3) {
            return $check;
        }
        $comment = new Article_comment;
        $article = new Article;

        $comment->user_id = \Session::get('login_id');
        $comment->art_id = $request->art_id;
        $comment->content = $request->content;
        $comment->add_time = time();

        $res = $comment->save();
        if($res) {
            $article->where('id', $request->art_id)->increment('comment_num');
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * 手记评论回复内容添加
     */
    
    public function reply_add(Request $request)
    {
        // return $request->all();\
        //验证登录状态
        $check = $this ->check_login();
        if ($check == 3) {
            return $check;
        }
        $reply = new Article_replies;
        if (\Session::get('login_id') == $request->from_user_id) {
            return 2;
        }
        $reply->comment_id = $request->comment_id;
        $reply->from_user_id = \Session::get('login_id');
        $reply->to_user_id = $request->from_user_id;
        $reply->reply_type = $request->reply_type;
        $reply->content = $request->content;
        $reply->add_time = time();

        $res = $reply->save();

        return  $res ? '1' : '0' ;
    }

    /**
     * 文章推荐
     * @return int  0推荐失败 1成功推荐 2不能重复推荐 3未登录
     */
    public function collection_add(Request $res)
    {
        $check = $this ->check_login();
        if ($check == 3) {
            return $check;
        }
        $collection = new Article_collections;
        $article = new Article;
        $id = $res->id;
        $user_id = \Session::get('login_id');

        $info = $collection->where('user_id', '=', $user_id)
                    ->where('article_id', '=', $id)
                    ->first();
        if (empty($info)) {
            $result = $collection->insert(['user_id' => $user_id, 'article_id' => $id]);
            if ($result) {
                $article->where('id', '=', $id)->increment('collection_num');
                return 1;
            } else {
                return 0;
            }
        }
        
        return 2;
    }

    /**
     * 手记标签页
     */
    public function tag_article($tag_id, $page = '')
    {
        $article = new Article;
        $articles = $article->where('status', '>', 0)->where('tag_id', 'like', "%$tag_id%")->get()->toArray();
        //获取所有用户信息
        $user_id = $this->unique(array_column($articles, 'user_id'));
        $userinfo = $this->get_info($user_id);

        $str = array("\r\n","\n","\r","\t",'<p>','</p>');
        foreach ($articles as $key => $value) {
            $articles[$key]['email'] = $userinfo[$value['user_id']];
            $articles[$key]['content'] = str_replace($str, ' ', $value['content']);
        }

        $tag_name = Article_tags::where('id', $tag_id)->lists('tag_name', 'id')->first();

        $limit = 3;
        $page_total = ceil(count($articles)/$limit);

        $page = $page > $page_total ? $page_total : $page;
        $page = $page < 1 ? 1 : $page;
        
        $articles_page = collect($articles)->forPage($page, $limit)->all();

        return view('Home.article.article_tag',[
            'articles' => $articles_page,
            'page' => $page,
            'prefix' => '.',
            'page_total' => $page_total,
            'tag_id' => $tag_id,
            'tag_name' => $tag_name,
        ]);
    }

    /**
     * 去重方法
     * @param  [array] $arr 
     * @return [array] 
     */
    protected function unique($arr)
    {
        $arr = array_flip($arr);
        return array_flip($arr);
    }

    /**
     * 验证是否登录
     * @return url
     */
    protected function check_login()
    {
        $user_id = \Session::get('login_id');
        
        if (empty($user_id)) {
           return 3;
        }
        
    }

    /**
     * 获取当前登录用户个人信息 发布手记数量 推荐数 以及评论数
     * @param login_id 当前用户登录ID
     * @return array
     */
    protected function get_userinfo($login_id)
    {
        //获取当前用户 发布手记数量
        $article_num = Article::where('user_id', $login_id)->count();
        //获取当前用户 推荐数
        $collection_num = Article_collections::where('user_id', $login_id)->count();
        //获取当前用户 评论数
        $comment_num = Article_comment::where('user_id', $login_id)->count();
        
        $login_info = [
            'login_id' => $login_id,
            'email' => \Session::get('email'),
            'article_num' => $article_num,
            'collection_num' => $collection_num,
            'comment_num' => $comment_num
        ];

        return $login_info;
    }

    /**
     * 获取文章表中所有用户信息
     * @return array
     */
    protected function get_info($user_id = '')
    {
        if ($user_id) {
            $userinfo = User::whereIn('id', $user_id)->lists('email', 'id')->toArray();
        } else {
            $articles_user = $this->unique(Article::where('status', 1)->lists('user_id')->toArray());
            $userinfo = User::lists('email', 'id')->toArray();
        }
        return $userinfo;
    }

    /**
     * 获取热门手记
     * @param  string $type 热门类别 all 所有手记热门 tag 单个种类热门
     * @return array 
     */
    protected function get_hot_articles($type, $tag = ''){
        if ($type == 'all') {
            $start_time = strtotime(date('Y m d'));
            // $end_time = strtotime
            // Article::where();
        }
    }
}
