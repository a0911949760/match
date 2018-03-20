<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userscare extends Model
{
    protected $fillable = [
        'name','twzipcode','twzipcode2','twzipcode3','birthday','phone','speciality','experience'
        ,'identitycard','email','password'
    ];
}
