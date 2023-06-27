<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UserSeeder::class, CadClinicaSeeder::class, CadDepartamentoSeeder::class, CadPodologoSeeder::class, CadFuncionarioSeeder::class, CadPacienteSeeder::class]);
    }
}
