<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;
class Post extends Model
{
    use Softdeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'posts';
    protected $fillable = ['name','description'];
}
