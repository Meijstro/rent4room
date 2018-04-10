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
          'street' => 'Kraneweg',
          'housenumber' => '2',
          'city_id' => '1',
          'postcode' => '9718 JP',
          'square_meter' => '14',
          'price' => '300',
          'user_id' => '2',
          'created_at' => '2018-01-01 10:00:00',
          'updated_at' => '2018-01-01 10:00:00',
          'date_available' => '31-03-2018',
          'description' => 'Beschrijving bij deze kamer. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
      ]);
      DB::table('rooms')->insert([
          'street' => 'Ambonstraat',
          'housenumber' => '14',
          'city_id' => '1',
          'postcode' => '9715 HC',
          'square_meter' => '18',
          'price' => '370',
          'user_id' => '2',
          'created_at' => '2018-01-01 10:10:00',
          'updated_at' => '2018-01-01 10:10:00',
          'date_available' => '31-03-2018',
          'description' => 'Beschrijving bij deze kamer. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
      ]);
      DB::table('rooms')->insert([
          'street' => 'Polderstraat',
          'housenumber' => '29',
          'city_id' => '1',
          'postcode' => '9724 EB',
          'square_meter' => '21',
          'price' => '400',
          'user_id' => '2',
          'created_at' => '2018-01-01 10:20:00',
          'updated_at' => '2018-01-01 10:20:00',
          'date_available' => '31-03-2018',
          'description' => 'Beschrijving bij deze kamer. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
      ]);
      DB::table('rooms')->insert([
          'street' => 'Van Iddekingeweg',
          'housenumber' => '47',
          'city_id' => '1',
          'postcode' => '9721 CB',
          'square_meter' => '23',
          'price' => '425',
          'user_id' => '2',
          'created_at' => '2018-01-01 10:30:00',
          'updated_at' => '2018-01-01 10:30:00',
          'date_available' => '31-03-2018',
          'description' => 'Beschrijving bij deze kamer. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
      ]);
      DB::table('rooms')->insert([
          'street' => 'Kleine Rozenstraat 9',
          'housenumber' => '29',
          'city_id' => '1',
          'postcode' => '9712 TL',
          'square_meter' => '16',
          'price' => '350',
          'user_id' => '2',
          'created_at' => '2018-01-01 10:40:00',
          'updated_at' => '2018-01-01 10:40:00',
          'date_available' => '31-03-2018',
          'description' => 'Beschrijving bij deze kamer. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
      ]);
      DB::table('rooms')->insert([
          'street' => 'Steenbokstraat',
          'housenumber' => '12',
          'city_id' => '1',
          'postcode' => '9742 TS',
          'square_meter' => '18',
          'price' => '370',
          'user_id' => '2',
          'created_at' => '2018-01-01 10:50:00',
          'updated_at' => '2018-01-01 10:50:00',
          'date_available' => '31-03-2018',
          'description' => 'Beschrijving bij deze kamer. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
      ]);
      DB::table('photos_rooms')->insert([
          'room_id' => '1',
          'filename' => '/storage/defaultroom.jpg',
      ]);
      DB::table('photos_rooms')->insert([
          'room_id' => '2',
          'filename' => '/storage/defaultroom.jpg',
      ]);
      DB::table('photos_rooms')->insert([
          'room_id' => '3',
          'filename' => '/storage/defaultroom.jpg',
      ]);
      DB::table('photos_rooms')->insert([
          'room_id' => '4',
          'filename' => '/storage/defaultroom.jpg',
      ]);
      DB::table('photos_rooms')->insert([
          'room_id' => '5',
          'filename' => '/storage/defaultroom.jpg',
      ]);
      DB::table('photos_rooms')->insert([
          'room_id' => '6',
          'filename' => '/storage/defaultroom.jpg',
      ]);
    }
}
