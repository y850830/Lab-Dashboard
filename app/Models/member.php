<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table = 'member';
    protected $fillable = ['name','cellphone','ID'];
}
