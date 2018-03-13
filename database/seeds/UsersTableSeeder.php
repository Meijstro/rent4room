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
         'name' => 'TestVerhuur',
         'role' => 'Verhuurder',
         'email' => 'verhuur@test.com',
         'password' => bcrypt('verhuurder'),
     ]);
   }



}
