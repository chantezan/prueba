<?php

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Rol::class)->create([
          "nombre" => "rol1",
      ]);
      factory(App\Rol::class)->create([
          "nombre" => "rol2",
      ]);
      factory(App\Rol::class)->create([
          "nombre" => "rol3",
      ]);
      factory(App\Rol::class)->create([
          "nombre" => "rol4",
      ]);
      factory(App\Rol::class)->create([
          "nombre" => "rol5",
      ]);
      factory(App\Rol::class)->create([
          "nombre" => "rol6",
      ]);
      factory(App\Rol::class)->create([
          "nombre" => "rol7",
      ]);
    }
}
