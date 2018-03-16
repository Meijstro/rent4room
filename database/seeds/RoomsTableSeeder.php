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
          'street' => 'Straatweg',
          'housenumber' => '11',
          'city_id' => '1',
          'postcode' => '9718 GA',
          'square_meter' => '14',
          'price' => '300',
          'user_id' => '2',
          'created_at' => '2018-01-01 10:00:00',
          'updated_at' => '2018-01-01 10:00:00',
          'date_available' => '31-03-2018'
      ]);
      DB::table('rooms')->insert([
          'street' => 'Laanstraat',
          'housenumber' => '4',
          'city_id' => '1',
          'postcode' => '9742 TP',
          'square_meter' => '18',
          'price' => '370',
          'user_id' => '2',
          'created_at' => '2018-01-01 10:10:00',
          'updated_at' => '2018-01-01 10:10:00',
          'date_available' => '31-03-2018'

      ]);
      DB::table('rooms')->insert([
          'street' => 'Steeglaan',
          'housenumber' => '42',
          'city_id' => '1',
          'postcode' => '9714 AD',
          'square_meter' => '21',
          'price' => '400',
          'user_id' => '2',
          'created_at' => '2018-01-01 10:20:00',
          'updated_at' => '2018-01-01 10:20:00',
          'date_available' => '31-03-2018'

      ]);
    }
}
