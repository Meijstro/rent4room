<?php

namespace App\Rooms;

use Illuminate\Database\Eloquent\Collection;

interface RoomsRepository

  {
      public function search(string $query = ""): Collection;

  
}
