<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
  /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
     DB::table('users')->insert([
         'name' => 'admin',
         'role' => 'Administrator',
         'email' => 'admin@admin.com',
         'password' => bcrypt('admin'),
     ]);

     DB::table('users')->insert([
         'name' => 'TestVerhuurder',
         'role' => 'Verhuurder',
         'email' => 'verhuur@test.com',
         'password' => bcrypt('verhuurder'),
         'premium' => 1,
     ]);

     DB::table('users')->insert([
         'name' => 'TestHuurder',
         'role' => 'Huurder',
         'email' => 'huur@test.com',
         'password' => bcrypt('huurder'),
         'premium' => 1,
     ]);
   }



}
