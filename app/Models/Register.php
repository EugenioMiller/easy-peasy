<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    //Relation one to many with courses
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
