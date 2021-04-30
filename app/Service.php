<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;


class Service extends Model
{
    public function projects(){
        return $this->hasMany('App\Project');
    }
}
