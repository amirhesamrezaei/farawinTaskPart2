<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userinfo extends Model
{

    protected $fillable = ['firstname', 'lastname', 'number', 'address', 'email'];



    protected $table = 'userinfo';
    //چون خود لاراول  s تهش اضافه میکنه 

    public static function adduser ($firstname, $lastname, $number, $address, $email){

        self::query()->create(['firstname'=>$firstname, 'lastname'=>$lastname, 'number'=>$number, 'address'=>$address, 'email'=>$email]);

    }

}


