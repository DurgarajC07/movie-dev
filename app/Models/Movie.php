<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Category;

class Movie extends Model
{

  public function cateogries()
  {
      return $this->belongsTo(Category::class);
  }
}
