<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;


class Project extends Model
{
    public function service(){
        return $this->belongsTo('App\Service');
    }
}
