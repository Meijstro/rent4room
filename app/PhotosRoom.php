<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;

class PhotosRoom extends Model
{
    protected $fillable = [
        'room_id', 'filename',
    ];

    public function room(){
      return $this->belongsTo(Room::class);
    }
}
