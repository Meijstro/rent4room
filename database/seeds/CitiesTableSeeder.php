<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cities')->insert([
          'name' => 'Groningen',
      ]);
      DB::table('cities')->insert([
          'name' => 'Zwolle',
      ]);
      DB::table('cities')->insert([
          'name' => 'Utrecht',
      ]);
      DB::table('cities')->insert([
          'name' => 'Amsterdam',
      ]);
      DB::table('cities')->insert([
          'name' => 'Leiden',
      ]);
      DB::table('cities')->insert([
          'name' => 'Den Haag',
      ]);
      DB::table('cities')->insert([
          'name' => 'Rotterdam',
      ]);
      DB::table('cities')->insert([
          'name' => 'Maastricht',
      ]);
    }
}
