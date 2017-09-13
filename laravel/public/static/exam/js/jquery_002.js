$(document).ready(function () {
    var idkey = 'cec241ca8ebed1d1e24731cc3e319b42957fdf69ede56db74940aca330257d38';
    $('<div id="cus_ser"><div class="cus_ser_"><div class="title"></div><ul><li id="zqq"><a href="https://wpa.qq.com/msgrd?v=3&amp;uin=2769482053&amp;site=qq&amp;menu=yes" target="_blank"><img border="0" src="https://pub.idqqimg.com/qconn/wpa/button/button_21.gif" alt="点击这里给我发消息" ></a></li><li id="zphone">136-6333-5927</li><li id="wb"><a href="https://weibo.com/phpinside" target="_blank">四脚猫微博</a></li><li><a target="_blank" href="https://shang.qq.com/wpa/qunwpa?idkey=' + idkey + '"><img border="0" src="https://pub.idqqimg.com/wpa/images/group.png" alt="四脚猫PHP高级群" title="四脚猫PHP高级群"></a></li></ul></div><span class="close"><img src="/img/icon_close.png" /></span> </div>').appendTo("body");

    $("#cus_ser .close").click(function () {
        $("#cus_ser").hide();
    })
    $("#cus_ser").mouseover(function () {
        $(this).stop();
        $(this).animate({
                width: 180
            },
            400, 'swing');
    })
    $("#cus_ser").mouseout(function () {
        $("#cus_ser").stop();
        $("#cus_ser").animate({
                width: 32
            },
            400, 'swing');
    })
});