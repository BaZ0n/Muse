<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Posts extends Model{

    protected $fillable = ['name', 'body', 'image'];
}
