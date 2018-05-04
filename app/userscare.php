<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userscare extends Model
{
    protected $fillable = [
        'name','file','gender','identitycard','birthday','phone','email','city','region','zipcode','行動不便',
        '中風', '植物人', '失智', '自閉症', '智能障礙', '精神病','experience','password'
    ];
}


