<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userscare extends Model
{
    protected $fillable = [
        'name','city','region','zipcode','birthday','phone','file','speciality','experience'
        ,'identitycard','email','password'
    ];
}
