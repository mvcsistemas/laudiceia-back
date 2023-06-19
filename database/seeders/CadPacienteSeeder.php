<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class CadPacienteSeeder extends Seeder
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
            DB::table('cad_paciente')->insert([
                'uuid'            => Str::uuid(36),
                'nome_paciente'   => $faker->name,
                'email'           => $faker->email,
                'sexo'            => 'Masculino',
                'telefone'        => '35248568',
                'celular'         => '997711122',
                'cpf'             => '12345678934',
                'cep'             => '13504361',
                'data_nascimento' => '2020-01-19',
                'numero'          => '3455',
                'endereco'        => 'Endereço teste',
                'estado_civil'    => 'Solteiro',
                'cidade'          => 'Rio Claro',
                'estado'          => 'São Paulo',
                'bairro'          => 'Teste',
                'profissao'       => 'Dev',
                'complemento'     => 'complemento Teste'
            ]);
        }
    }
}
