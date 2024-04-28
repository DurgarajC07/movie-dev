<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Movie;

class Category extends Model
{
    protected $table = 'cateogries';

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
