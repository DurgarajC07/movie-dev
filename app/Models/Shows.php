<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Category;
use \App\Models\Episode;

class Shows extends Model
{

// Mutator to encode and store multiple images as JSON
    public function setPosterAttribute($poster)
    {
        if (is_array($poster)) {
            $this->attributes['poster'] = json_encode($poster);
        }
    }

    // Accessor to decode and retrieve multiple images from JSON
    public function getPosterAttribute($poster)
    {
        return json_decode($poster, true);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function episode()
        {
            return $this->hasMany(Episode::class);
        }
}
