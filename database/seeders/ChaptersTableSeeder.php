<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chapter;

class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chapters = [
            ['sector_id' => 1, 'name' => 'Álgebra de Números Reales'],
            ['sector_id' => 1, 'name' => 'Matemáticas Aplicadas'],
            ['sector_id' => 1, 'name' => 'Lógica y Conjuntos'],
            ['sector_id' => 1, 'name' => 'Números Naturales'],
            ['sector_id' => 1, 'name' => 'Relaciones y Geometría Analítica'],
            ['sector_id' => 1, 'name' => 'Funciones'],
            ['sector_id' => 1, 'name' => 'Polinomios'],
            ['sector_id' => 1, 'name' => 'Exponencial y Logaritmos'],
            ['sector_id' => 1, 'name' => 'Trigonometría'],
            ['sector_id' => 1, 'name' => 'Números Complejos'],
            ['sector_id' => 1, 'name' => 'Vectores'],
            ['sector_id' => 1, 'name' => 'Rectas y Planos en IR³'],


            ['sector_id' => 2, 'name' => 'Limites'],
            ['sector_id' => 2, 'name' => 'Continuidad'],
            ['sector_id' => 2, 'name' => 'Derivadas'],
            ['sector_id' => 2, 'name' => 'Aplicación Derivadas'],


            ['sector_id' => 3, 'name' => 'Integral Indefinida'],
            ['sector_id' => 3, 'name' => 'Integral de Riemann'],
            ['sector_id' => 3, 'name' => 'Integral Definida'],
            ['sector_id' => 3, 'name' => 'Aplicación 1'],
            ['sector_id' => 3, 'name' => 'Aplicación 2'],
            ['sector_id' => 3, 'name' => 'Otras Aplicaciones'],
            ['sector_id' => 3, 'name' => 'Integrales Impropias'],
            ['sector_id' => 3, 'name' => 'Sucesiones Numéricas'],
            ['sector_id' => 3, 'name' => 'Series Numéricas'],
            ['sector_id' => 3, 'name' => 'Suc. y Series de Funciones'],


            ['sector_id' => 4, 'name' => 'Matrices'],
            ['sector_id' => 4, 'name' => 'Operaciones Elementales'],
            ['sector_id' => 4, 'name' => 'Determinantes'],
            ['sector_id' => 4, 'name' => 'Sistemas de Ecs. Lineales (SEL)'],
            ['sector_id' => 4, 'name' => 'Espacios Vectoriales'],
            ['sector_id' => 4, 'name' => 'Matriz Cambio Base'],
            ['sector_id' => 4, 'name' => 'Transformaciones Lineales'],
            ['sector_id' => 4, 'name' => 'Diagonalización'],
            ['sector_id' => 4, 'name' => 'Espacios Euclidianos'],


            ['sector_id' => 5, 'name' => 'Funciones, Limites'],
            ['sector_id' => 5, 'name' => 'Derivadas Parciales'],
            ['sector_id' => 5, 'name' => 'Regla de la Cadena'],
            ['sector_id' => 5, 'name' => 'Gradiente y Aplicaciones'],
            ['sector_id' => 5, 'name' => 'Func. Implícitas e Inversas'],
            ['sector_id' => 5, 'name' => 'Series de Taylor y Max./Min.'],


            ['sector_id' => 6, 'name' => 'Integrales Dobles'],
            ['sector_id' => 6, 'name' => 'Integrales Triples'],
            ['sector_id' => 6, 'name' => 'Int. Múltiples Impropias'],
            ['sector_id' => 6, 'name' => 'Curvas, Rotor y Divergencia'],
            ['sector_id' => 6, 'name' => 'Integrales de Línea'],
            ['sector_id' => 6, 'name' => 'Integrales de Superficie'],


            ['sector_id' => 7, 'name' => 'EDO´s de Primer Orden'],
            ['sector_id' => 7, 'name' => 'Operadores Dif. Lineales'],
            ['sector_id' => 7, 'name' => 'Sol. Part. y Reduc. Orden'],
            ['sector_id' => 7, 'name' => 'Teoría Cualitativa'],
            ['sector_id' => 7, 'name' => 'Transformada de Laplace'],
            ['sector_id' => 7, 'name' => 'Sol por Series, Bessel, Storm'],


            ['sector_id' => 8, 'name' => 'Series de Fourier'],
            ['sector_id' => 8, 'name' => 'Transformada de Fourier'],
            ['sector_id' => 8, 'name' => 'Distribuciones - Función Generalizada'],


            ['sector_id' => 9, 'name' => 'Cuasilineales (Primer Orden)'],
            ['sector_id' => 9, 'name' => 'EDP 2º Orden (Forma Normal)'],
            ['sector_id' => 9, 'name' => 'Coef. Constantes y Reducibles'],
            ['sector_id' => 9, 'name' => 'EDP en Regiones Acotadas'],
            ['sector_id' => 9, 'name' => 'EDP en Regiones No-Acotadas'],
            ['sector_id' => 9, 'name' => 'EDP de Onda, Calor y Laplace'],


            ['sector_id' => 10, 'name' => 'Complejos y Topología'],
            ['sector_id' => 10, 'name' => 'Funciones y Límites'],
            ['sector_id' => 10, 'name' => 'Derivadas, Series e Integral'],
        ];

        foreach ($chapters as $chapterData) {
            $chapter = new Chapter($chapterData);
            $chapter->save();
        }
    }
}
        
        
        