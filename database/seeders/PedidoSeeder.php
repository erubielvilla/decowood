<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pedido;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
        	'nombre_cliente' => 'Juan',
        	'apellidos' => 'Moreno Calderon',
        	'correo' => 'Juan1092@gmail.com',
        	'mueble' => 'Sillas',
        	'direccion' => 'Calle morelos N12',
        	'telefono' => '78437378378'
        ]);
        Pedido::insert($data);
    }
}
