<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userscare extends Model
{
    protected $fillable = [
        'name','twzipcode','twzipcode2','twzipcode3','birthday','phone','speciality','experience'
        ,'identitycard','email','password'
    ];
}
