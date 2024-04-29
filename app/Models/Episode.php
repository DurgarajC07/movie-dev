<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Shows;

class Episode extends Model
{
  public function shows()
  {
      return $this->belongsTo(Shows::class);
  }
}
