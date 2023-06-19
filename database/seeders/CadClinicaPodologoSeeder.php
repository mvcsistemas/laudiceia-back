<?php

namespace Database\Seeders;

  // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class CadClinicaPodologoSeeder extends Seeder
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
            DB::table('cad_clinica_podologo')->insert([
                'uuid'        => Str::uuid(36),
                'id_clinica'  => 1,
                'id_podologo' => 2,
                'telefone'    => '999788996',
                'whatsapp'    => '998765421'
            ]);
        }
    }
}
