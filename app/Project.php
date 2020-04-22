<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $table = 'projects';
    //primary key change from default
    protected $primaryKey = 'project_id';
    Public $timestamps = true;
}
