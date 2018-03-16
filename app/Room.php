<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Room extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'street', 'housenumber', 'city_id', 'postcode', 'square_meter', 'price', 'date_available', 'user_id',
  ];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function city(){
    return $this->belongsTo(City::class);
  }

  public function photos(){
    return $this->hasMany(PhotosRoom::class);
  }

}
