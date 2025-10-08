<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empresas')->insert([
            [
                'nombre' => 'Inditex',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Viscofan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);

        // Insertar empleados
        DB::table('empleados')->insert([
            [
                'empresa_id' => 1,
                'nombre' => 'Amancio Ortega',
                'email' => 'titoamancio@inditex.com',
                'contrasenya' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 2,
                'nombre' => 'Francisco Riberas',
                'email' => 'titofrancis@viscofan.com',
                'contrasenya' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);

        // Insertar clientes
        DB::table('clientes')->insert([
            [
                'empresa_id' => 1,
                'nombre' => 'Zara',
                'email' => 'zara@zara.com',
                'contrasenya' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'empresa_id' => 2,
                'nombre' => 'Eroski',
                'email' => 'eroski@eroski.com',
                'contrasenya' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
