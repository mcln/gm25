<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectors = [
            ['name' => 'Álgebra I, Álgebra II'],
            ['name' => 'Cálculo I, Análisis Matemático I'],
            ['name' => 'Cálculo Integral, Cálculo II , Sucesiones y Series'],
            ['name' => 'Álgebra Lineal I, Álgebra Lineal II'],
            ['name' => 'Cálculo en Varias Variables, Cálculo III, Cálculo Multivariable'],
            ['name' => 'Integrales Múltiples, Integrales de Línea e Integrales de Superficie'],
            ['name' => 'Ecuaciones Diferenciales Ordinarias (EDO), Transf. de Laplace y Sol. por Series'],
            ['name' => 'Series de Fourier y Transformadas de Fourier'],
            ['name' => 'Ecuaciones Diferenciales Parciales (EDP), Cálculo IV'],
            ['name' => 'Variable Compleja'],
        ];

        foreach ($sectors as $sectorData) {
            $sector = new Sector($sectorData);
            $sector->save();
        }
    }
}
