<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    //
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'date' => 'required',
        'body' => 'required',
    );
}
