<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Cia beda buvo, pakeiciau post i body ir veikia :)
    protected $fillable = ['category_title'];
}
