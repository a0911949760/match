<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userscare extends Model
{
    protected $fillable = [
        'name','city','region','zipcode','birthday','phone','file','高血壓',
        '中風', '植物人', '失智', '自閉症', '智能障礙', '精神病','experience','identitycard','email','password'
    ];
}


