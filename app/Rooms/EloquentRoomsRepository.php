<?php

namespace App\Rooms;

use App\Room;
use Illuminate\Database\Eloquent\Collection;

class EloquentRoomsRepository implements RoomsRepository
{
    public function search(string $query = ""): Collection
    {
        return Room::where('street', 'like', "%{$query}%")
            ->orWhere('postcode', 'like', "%{$query}%")
            ->orWhere('square_meter', 'like', "%{$query}%")
            ->get();
    }

  
}
