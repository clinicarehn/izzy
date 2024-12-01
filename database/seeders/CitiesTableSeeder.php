<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            // Ciudades de Belize
            ['name' => 'Belize City', 'state_id' => 1],
            ['name' => 'San Ignacio', 'state_id' => 2],
            ['name' => 'Corozal Town', 'state_id' => 3],
            ['name' => 'Orange Walk Town', 'state_id' => 4],
            ['name' => 'Dangriga', 'state_id' => 5],
            ['name' => 'Punta Gorda', 'state_id' => 6],

            // Ciudades de Costa Rica
            ['name' => 'San José', 'state_id' => 7],
            ['name' => 'Alajuela', 'state_id' => 8],
            ['name' => 'Cartago', 'state_id' => 9],
            ['name' => 'Heredia', 'state_id' => 10],
            ['name' => 'Liberia', 'state_id' => 11],
            ['name' => 'Puntarenas', 'state_id' => 12],
            ['name' => 'Limón', 'state_id' => 13],

            // Ciudades de El Salvador
            ['name' => 'Ahuachapán', 'state_id' => 14],
            ['name' => 'Sensuntepeque', 'state_id' => 15],
            ['name' => 'Chalatenango', 'state_id' => 16],
            ['name' => 'Cojutepeque', 'state_id' => 17],
            ['name' => 'Santa Tecla', 'state_id' => 18],
            ['name' => 'Zacatecoluca', 'state_id' => 19],
            ['name' => 'La Unión', 'state_id' => 20],
            ['name' => 'San Francisco Gotera', 'state_id' => 21],
            ['name' => 'San Miguel', 'state_id' => 22],
            ['name' => 'San Salvador', 'state_id' => 23],
            ['name' => 'San Vicente', 'state_id' => 24],
            ['name' => 'Santa Ana', 'state_id' => 25],
            ['name' => 'Sonsonate', 'state_id' => 26],
            ['name' => 'Usulután', 'state_id' => 27],

            // Ciudades de Guatemala
            ['name' => 'Cobán', 'state_id' => 28],
            ['name' => 'Salamá', 'state_id' => 29],
            ['name' => 'Chimaltenango', 'state_id' => 30],
            ['name' => 'Chiquimula', 'state_id' => 31],
            ['name' => 'Guastatoya', 'state_id' => 32],
            ['name' => 'Escuintla', 'state_id' => 33],
            ['name' => 'Guatemala City', 'state_id' => 34],
            ['name' => 'Huehuetenango', 'state_id' => 35],
            ['name' => 'Puerto Barrios', 'state_id' => 36],
            ['name' => 'Jalapa', 'state_id' => 37],
            ['name' => 'Jutiapa', 'state_id' => 38],
            ['name' => 'Flores', 'state_id' => 39],
            ['name' => 'Quetzaltenango', 'state_id' => 40],
            ['name' => 'Santa Cruz del Quiché', 'state_id' => 41],
            ['name' => 'Retalhuleu', 'state_id' => 42],
            ['name' => 'Antigua Guatemala', 'state_id' => 43],
            ['name' => 'San Marcos', 'state_id' => 44],
            ['name' => 'Cuilapa', 'state_id' => 45],
            ['name' => 'Sololá', 'state_id' => 46],
            ['name' => 'Mazatenango', 'state_id' => 47],
            ['name' => 'Totonicapán', 'state_id' => 48],
            ['name' => 'Zacapa', 'state_id' => 49],

            // Ciudades de Honduras
            ['name' => 'La Ceiba', 'state_id' => 50],
            ['name' => 'Choluteca', 'state_id' => 51],
            ['name' => 'Trujillo', 'state_id' => 52],
            ['name' => 'Comayagua', 'state_id' => 53],
            ['name' => 'Santa Rosa de Copán', 'state_id' => 54],
            ['name' => 'San Pedro Sula', 'state_id' => 55],
            ['name' => 'Danlí', 'state_id' => 56],
            ['name' => 'Tegucigalpa', 'state_id' => 57],
            ['name' => 'Puerto Lempira', 'state_id' => 58],
            ['name' => 'La Esperanza', 'state_id' => 59],
            ['name' => 'Roatán', 'state_id' => 60],
            ['name' => 'La Paz', 'state_id' => 61],
            ['name' => 'Gracias', 'state_id' => 62],
            ['name' => 'Ocotepeque', 'state_id' => 63],
            ['name' => 'Juticalpa', 'state_id' => 64],
            ['name' => 'Santa Bárbara', 'state_id' => 65],
            ['name' => 'Nacaome', 'state_id' => 66],
            ['name' => 'El Progreso', 'state_id' => 67],

            // Ciudades de Nicaragua
            ['name' => 'Boaco', 'state_id' => 68],
            ['name' => 'Jinotepe', 'state_id' => 69],
            ['name' => 'Chinandega', 'state_id' => 70],
            ['name' => 'Juigalpa', 'state_id' => 71],
            ['name' => 'Estelí', 'state_id' => 72],
            ['name' => 'Granada', 'state_id' => 73],
            ['name' => 'Jinotega', 'state_id' => 74],
            ['name' => 'León', 'state_id' => 75],
            ['name' => 'Somoto', 'state_id' => 76],
            ['name' => 'Managua', 'state_id' => 77],
            ['name' => 'Masaya', 'state_id' => 78],
            ['name' => 'Matagalpa', 'state_id' => 79],
            ['name' => 'Ocotal', 'state_id' => 80],
            ['name' => 'San Carlos', 'state_id' => 81],
            ['name' => 'Rivas', 'state_id' => 82],
            ['name' => 'Bilwi', 'state_id' => 83],
            ['name' => 'Bluefields', 'state_id' => 84],

            // Ciudades de Panamá
            ['name' => 'Bocas del Toro', 'state_id' => 85],
            ['name' => 'Penonomé', 'state_id' => 86],
            ['name' => 'Colón', 'state_id' => 87],
            ['name' => 'David', 'state_id' => 88],
            ['name' => 'La Palma', 'state_id' => 89],
            ['name' => 'Chitré', 'state_id' => 90],
            ['name' => 'Las Tablas', 'state_id' => 91],
            ['name' => 'Panamá City', 'state_id' => 92],
            ['name' => 'Santiago', 'state_id' => 93],
            ['name' => 'El Porvenir', 'state_id' => 94],
            ['name' => 'Union Chocó', 'state_id' => 95],
            ['name' => 'San Félix', 'state_id' => 96],
        ];

        DB::table('cities')->insert($cities);
    }
}
