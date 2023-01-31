<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class CadFuncionarioSeeder extends Seeder
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
            DB::table('cad_funcionario')->insert([
                'uuid' => Str::uuid(36),
                'nome_funcionario' => $faker->name,
                'email' => $faker->email,
                'telefone' => '997711122',
                'cpf' => '12345678934',
                'cep' => '13504361',
                'numero' => '3455',
                'endereco' => 'Endereço teste',
                'cidade' => 'Rio Claro',
                'estado' => 'São Paulo',
                'complemento' => 'complemento Teste',
                'codigo_ativacao' => '1234',
                'id_departamento' => 1,
            ]);
        }
    }
}
