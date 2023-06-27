<?php

namespace Database\Seeders;

  // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class CadPodologoSeeder extends Seeder
{
      /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 3; $i++) {
            DB::table('cad_podologo')->insert([
                'uuid'             => Str::uuid(36),
                'nome_podologo'    => $faker->name,
                'email'            => $faker->unique()->safeEmail(),
                'telefone_interno' => '19997778998',
                'id_clinica'       => 1
            ]);
        }
    }
}
