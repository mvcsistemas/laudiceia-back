<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use MVC\Models\CadClinica\CadClinica;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UserSeeder::class, CadClinicaSeeder::class, CadDepartamentoSeeder::class, CadMedicoSeeder::class, CadFuncionarioSeeder::class, CadClinicaMedicoSeeder::class]);
    }
}
