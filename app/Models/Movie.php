<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Category;
use \App\Models\MovieLink;

class Movie extends Model
{

  public function category()
  {
      return $this->belongsTo(Category::class, 'category_id');
  }

  public function movielink()
    {
        return $this->hasMany(MovieLink::class);
    }
}
