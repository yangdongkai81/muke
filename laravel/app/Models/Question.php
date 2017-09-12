<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'put_questions';

    protected $primarykey = 'id';

    public $timestamps = false;
}