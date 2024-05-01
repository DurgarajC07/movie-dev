<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieLink extends Model
{
    protected $table = 'movie_links';

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

}
