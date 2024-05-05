<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Category;
use \App\Models\MovieLink;

class Movie extends Model
{
    protected $fillable = [
        'category_id',
        'image',
        'name',
        'description',
        'year',
        'duration',
        'rating',
        'trailer_link',
        'file_name',
        'popular',
        'poster', // This is the attribute for multiple images
    ];

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
      return $this->belongsTo(Category::class, 'category_id');
  }

  public function movielink()
    {
        return $this->hasMany(MovieLink::class);
    }
}
