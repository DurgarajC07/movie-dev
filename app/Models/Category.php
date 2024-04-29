<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Movie;
use \App\Models\Shows;


class Category extends Model
{
    protected $table = 'cateogries';

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
    public function shows()
    {
        return $this->hasMany(Shows::class);
    }
}
