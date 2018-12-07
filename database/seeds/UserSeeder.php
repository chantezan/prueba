<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class)->create([
        "name" => "root",
          'password' => Hash::make("111"),
      ]);
      factory(App\User::class,10)->create();
    }
}
