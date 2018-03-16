<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class City extends Model
{
    use Notifiable;

    public function rooms(){
      return $this->belongsToMany(Room::class);
    }
}
