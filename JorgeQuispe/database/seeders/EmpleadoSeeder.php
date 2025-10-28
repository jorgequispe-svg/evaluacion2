<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        //

        Empleado::create(['nombre'=>'Luis','apellido'=>'Quispe','correo'=>'luisq@gmail.com','salario'=>1500.50]);
        Empleado::create(['nombre'=>'Jorge','apellido'=>'Mollericona','correo'=>'jorgem@gmail.com','salario'=>2450.50]);
        Empleado::create(['nombre'=>'Mateo','apellido'=>'Mamani','correo'=>'mateom@gmail.com','salario'=>5000.50]);


    }
}
