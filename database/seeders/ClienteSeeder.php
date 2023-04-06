<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
        	'nombre_cliente' => 'David',
        	'apellidos_c' => 'Torres Santes',
        	'correo' => 'torresSD@gmail.com',
        	'direccion' => '16 de septiembre #14',
        	'telefono' => '1234567890'
        ]);

        Cliente::insert($data);

    }
}
