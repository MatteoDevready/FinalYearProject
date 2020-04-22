<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    //primary key change from default
    public $primaryKey = 'post_id';
    Public $timestamps = true;
}
// will give all post thanks to the method that can be called with the model class
//More functionalities are available from the model class
//Post::all();
