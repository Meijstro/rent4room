<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('rooms')->insert([
          'city_id' => '1',
          'postcode' => '9718 GA',
          'square_meter' => '14',
          'price' => '300',
          'user_id' => '2',
          'created_at' => '2018-01-01 10:00:00',
          'updated_at' => '2018-01-01 10:00:00',
      ]);
      DB::table('rooms')->insert([
          'city_id' => '1',
          'postcode' => '9742 TP',
          'square_meter' => '18',
          'price' => '370',
          'user_id' => '2',
          'created_at' => '2018-01-01 10:10:00',
          'updated_at' => '2018-01-01 10:10:00',
      ]);
      DB::table('rooms')->insert([
          'city_id' => '1',
          'postcode' => '9714 AD',
          'square_meter' => '21',
          'price' => '400',
          'user_id' => '2',
          'created_at' => '2018-01-01 10:20:00',
          'updated_at' => '2018-01-01 10:20:00',
      ]);
    }
}
