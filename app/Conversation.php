<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
  public function room(){
    return $this->belongsTo(Room::class);
  }
}
