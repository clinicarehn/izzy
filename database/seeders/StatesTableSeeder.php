<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    public function run(): void
    {
        $states = [
            // Estados de Belice
            ['name' => 'Belize District', 'country_id' => 1],
            ['name' => 'Cayo District', 'country_id' => 1],
            ['name' => 'Corozal District', 'country_id' => 1],
            ['name' => 'Orange Walk District', 'country_id' => 1],
            ['name' => 'Stann Creek District', 'country_id' => 1],
            ['name' => 'Toledo District', 'country_id' => 1],

            // Provincias de Costa Rica
            ['name' => 'San José', 'country_id' => 2],
            ['name' => 'Alajuela', 'country_id' => 2],
            ['name' => 'Cartago', 'country_id' => 2],
            ['name' => 'Heredia', 'country_id' => 2],
            ['name' => 'Guanacaste', 'country_id' => 2],
            ['name' => 'Puntarenas', 'country_id' => 2],
            ['name' => 'Limón', 'country_id' => 2],

            // Departamentos de El Salvador
            ['name' => 'Ahuachapán', 'country_id' => 3],
            ['name' => 'Cabañas', 'country_id' => 3],
            ['name' => 'Chalatenango', 'country_id' => 3],
            ['name' => 'Cuscatlán', 'country_id' => 3],
            ['name' => 'La Libertad', 'country_id' => 3],
            ['name' => 'La Paz', 'country_id' => 3],
            ['name' => 'La Unión', 'country_id' => 3],
            ['name' => 'Morazán', 'country_id' => 3],
            ['name' => 'San Miguel', 'country_id' => 3],
            ['name' => 'San Salvador', 'country_id' => 3],
            ['name' => 'San Vicente', 'country_id' => 3],
            ['name' => 'Santa Ana', 'country_id' => 3],
            ['name' => 'Sonsonate', 'country_id' => 3],
            ['name' => 'Usulután', 'country_id' => 3],

            // Departamentos de Guatemala
            ['name' => 'Alta Verapaz', 'country_id' => 4],
            ['name' => 'Baja Verapaz', 'country_id' => 4],
            ['name' => 'Chimaltenango', 'country_id' => 4],
            ['name' => 'Chiquimula', 'country_id' => 4],
            ['name' => 'El Progreso', 'country_id' => 4],
            ['name' => 'Escuintla', 'country_id' => 4],
            ['name' => 'Guatemala', 'country_id' => 4],
            ['name' => 'Huehuetenango', 'country_id' => 4],
            ['name' => 'Izabal', 'country_id' => 4],
            ['name' => 'Jalapa', 'country_id' => 4],
            ['name' => 'Jutiapa', 'country_id' => 4],
            ['name' => 'Petén', 'country_id' => 4],
            ['name' => 'Quetzaltenango', 'country_id' => 4],
            ['name' => 'Quiché', 'country_id' => 4],
            ['name' => 'Retalhuleu', 'country_id' => 4],
            ['name' => 'Sacatepéquez', 'country_id' => 4],
            ['name' => 'San Marcos', 'country_id' => 4],
            ['name' => 'Santa Rosa', 'country_id' => 4],
            ['name' => 'Sololá', 'country_id' => 4],
            ['name' => 'Suchitepéquez', 'country_id' => 4],
            ['name' => 'Totonicapán', 'country_id' => 4],
            ['name' => 'Zacapa', 'country_id' => 4],

            // Departamentos de Honduras
            ['name' => 'Atlántida', 'country_id' => 5],
            ['name' => 'Choluteca', 'country_id' => 5],
            ['name' => 'Colón', 'country_id' => 5],
            ['name' => 'Comayagua', 'country_id' => 5],
            ['name' => 'Copán', 'country_id' => 5],
            ['name' => 'Cortés', 'country_id' => 5],
            ['name' => 'El Paraíso', 'country_id' => 5],
            ['name' => 'Francisco Morazán', 'country_id' => 5],
            ['name' => 'Gracias a Dios', 'country_id' => 5],
            ['name' => 'Intibucá', 'country_id' => 5],
            ['name' => 'Islas de la Bahía', 'country_id' => 5],
            ['name' => 'La Paz', 'country_id' => 5],
            ['name' => 'Lempira', 'country_id' => 5],
            ['name' => 'Ocotepeque', 'country_id' => 5],
            ['name' => 'Olancho', 'country_id' => 5],
            ['name' => 'Santa Bárbara', 'country_id' => 5],
            ['name' => 'Valle', 'country_id' => 5],
            ['name' => 'Yoro', 'country_id' => 5],

            // Departamentos de Nicaragua
            ['name' => 'Boaco', 'country_id' => 6],
            ['name' => 'Carazo', 'country_id' => 6],
            ['name' => 'Chinandega', 'country_id' => 6],
            ['name' => 'Chontales', 'country_id' => 6],
            ['name' => 'Estelí', 'country_id' => 6],
            ['name' => 'Granada', 'country_id' => 6],
            ['name' => 'Jinotega', 'country_id' => 6],
            ['name' => 'León', 'country_id' => 6],
            ['name' => 'Madriz', 'country_id' => 6],
            ['name' => 'Managua', 'country_id' => 6],
            ['name' => 'Masaya', 'country_id' => 6],
            ['name' => 'Matagalpa', 'country_id' => 6],
            ['name' => 'Nueva Segovia', 'country_id' => 6],
            ['name' => 'Río San Juan', 'country_id' => 6],
            ['name' => 'Rivas', 'country_id' => 6],
            ['name' => 'Costa Caribe Norte', 'country_id' => 6],
            ['name' => 'Costa Caribe Sur', 'country_id' => 6],

            // Provincias de Panamá
            ['name' => 'Bocas del Toro', 'country_id' => 7],
            ['name' => 'Coclé', 'country_id' => 7],
            ['name' => 'Colón', 'country_id' => 7],
            ['name' => 'Chiriquí', 'country_id' => 7],
            ['name' => 'Darién', 'country_id' => 7],
            ['name' => 'Herrera', 'country_id' => 7],
            ['name' => 'Los Santos', 'country_id' => 7],
            ['name' => 'Panamá', 'country_id' => 7],
            ['name' => 'Veraguas', 'country_id' => 7],
            ['name' => 'Guna Yala', 'country_id' => 7],
            ['name' => 'Emberá-Wounaan', 'country_id' => 7],
            ['name' => 'Ngäbe-Buglé', 'country_id' => 7],
        ];

        DB::table('states')->insert($states);
    }
}
