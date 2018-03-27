<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userscare extends Model
{
    protected $fillable = [
        'name','county','district','zipcode','birthday','phone','speciality','experience'
        ,'identitycard','email','password'
    ];
}
