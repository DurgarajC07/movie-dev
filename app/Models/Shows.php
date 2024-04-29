<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Category;
use \App\Models\Episode;

class Shows extends Model
{

  public function category()
  {
      return $this->belongsTo(Category::class);
  }

  public function episode()
    {
        return $this->hasMany(Episode::class);
    }
}
