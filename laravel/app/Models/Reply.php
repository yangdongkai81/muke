<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'reply';

    protected $primarykey = 'id';

    public $timestamps = false;
}
