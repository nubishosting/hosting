<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    protected $fillable = ['username' , 'dbpwd' , 'dname' , 'plan'];
}
