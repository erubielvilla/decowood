<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
        	'nombre_empleado' => 'Diana',
        	'apellidos' => 'Santes Cordoba',
        	'telefono' => '784123237',
        	'correo' => 'dianaCOrdoba@gmail.com',
        	'direccion' => 'Calle 5 de mayo',
        	'fecha_nacimiento' => '2019-02-09',
        	'edad' => '22',
        	'sexo' => 'Masculino',
        	'cargo' => 'Carpintero'
        ]);

        Empleado::insert($data);
    }
}
