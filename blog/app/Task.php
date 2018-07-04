<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query, $val){
      return $query->where('completed', 0);
    }
}
