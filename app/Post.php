<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Cia beda buvo, pakeiciau post i body ir veikia :)
    protected $fillable = ['title', 'body', 'user_id'];
}
