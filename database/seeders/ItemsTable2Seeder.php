<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTable2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [

            /* Sector 1 - Algebra de Números Reales */ 

            ['section_id' => 21, 'name' => 'Problemas de planteo de punto de equilibrio'],
            ['section_id' => 22, 'name' => 'Proposiciones simples'],
            ['section_id' => 24, 'name' => 'Propiedades de reducción y simplificación'],
            ['section_id' => 24, 'name' => 'Familia de Conjuntos'],
            ['section_id' => 25, 'name' => 'Aplicaciones (2 conjuntos)'],
            ['section_id' => 25, 'name' => 'Aplicaciones (3 conjuntos)'],
            ['section_id' => 27, 'name' => 'Inducción con símbolo sumatorio'],
            ['section_id' => 27, 'name' => 'Otros'],
            ['section_id' => 28, 'name' => 'Sumatorias básicas'],
            ['section_id' => 28, 'name' => 'Otros Prop'],
            ['section_id' => 28, 'name' => 'Exponencial Logaritmica'],
            ['section_id' => 28, 'name' => 'Teorema del Binomio'],
            ['section_id' => 28, 'name' => 'Demostraciones Prop Estadística'],
            ['section_id' => 31, 'name' => 'Desarrollo'],
            ['section_id' => 31, 'name' => 'Un término'],
            ['section_id' => 31, 'name' => 'Term central'],
            ['section_id' => 31, 'name' => 'Term condicionado'],
            ['section_id' => 31, 'name' => 'Coef'],
            ['section_id' => 31, 'name' => 'Indep'],
            ['section_id' => 35, 'name' => 'Rectas pto pend 2 ptos'],
            ['section_id' => 35, 'name' => 'Rectas pto mas condición'],
            ['section_id' => 35, 'name' => 'Rectas mas nivel'],
            ['section_id' => 35, 'name' => 'Rectas parametros'],
            ['section_id' => 35, 'name' => 'Circunferencia normal'],
            ['section_id' => 35, 'name' => 'Circunferencia mas nivel'],
            ['section_id' => 36, 'name' => 'Aplicación de circunferencia'],
            ['section_id' => 36, 'name' => 'Aplicación de Parabola'],
            ['section_id' => 36, 'name' => 'Aplicación de Elipse'],
            ['section_id' => 36, 'name' => 'Aplicación de Hiperbola'],
            ['section_id' => 37, 'name' => 'Funciones gráficas'],
            ['section_id' => 37, 'name' => 'Dominio normal'],
            ['section_id' => 37, 'name' => 'Dominio mas nivel'],
            ['section_id' => 37, 'name' => 'Recorrido normal'],
            ['section_id' => 37, 'name' => 'Reccorido mas nivel'],
            ['section_id' => 37, 'name' => 'Inyectiva, epiyectiva, biyectiva e inversa analítica normal'],
            ['section_id' => 37, 'name' => 'Inyectiva, epiyectiva, biyectiva e inversa analítica mas nivel'],
            ['section_id' => 37, 'name' => 'Compuesta valoraciones'],
            ['section_id' => 37, 'name' => 'Compuesta normal'],
            ['section_id' => 37, 'name' => 'Compuesta mas nivel'],
            ['section_id' => 37, 'name' => 'Funciones pares e impares descomponer'],
            ['section_id' => 38, 'name' => 'funciones exponencial logaritmo tipo 1'],
            ['section_id' => 38, 'name' => 'funciones exponencial logaritmo tipo 2'],
            ['section_id' => 38, 'name' => 'funciones exponencial logaritmo tipo 3'],
            ['section_id' => 38, 'name' => 'Función mezclas'],
            ['section_id' => 39, 'name' => 'Modelos lineales'],
            ['section_id' => 39, 'name' => 'Funciones cuadráticas. Parabola Máximos, Mínimos'],
            ['section_id' => 39, 'name' => 'Modelos Función dada otras no usual'],
            ['section_id' => 39, 'name' => 'Aplicación de Funciones. Economía mas nivel'],
            ['section_id' => 39, 'name' => 'Modelos función dada exp log vida media'],
            ['section_id' => 39, 'name' => 'Modelos función dada exp log población'],
            ['section_id' => 39, 'name' => 'Modelos función dada exp log económicos'],
            ['section_id' => 39, 'name' => 'Modelos función dada exp log otros'],
            ['section_id' => 42, 'name' => 'Ecuaciones exponenciales mas nivel'],
            ['section_id' => 42, 'name' => 'Cálulo desarrollo logarítmo numérico'],
            ['section_id' => 42, 'name' => 'Cálulo desarrollo logarítmo literal'],
            ['section_id' => 42, 'name' => 'Ecuaciones exp se aplica log'],
            ['section_id' => 42, 'name' => 'Ecuaciones log simples'],
            ['section_id' => 42, 'name' => 'Ecuaciones log mas nivel'],
            ['section_id' => 42, 'name' => 'Ecuaciones mixtas'],
            ['section_id' => 42, 'name' => 'Inecuaciones log'],
            ['section_id' => 42, 'name' => 'inecuaciones mixtas'],
            ['section_id' => 42, 'name' => 'Sistemas de ecuaciones mixtos'],
            ['section_id' => 42, 'name' => 'Gráficas Log'],
            ['section_id' => 43, 'name' => 'Exp Log demostrativos otros'],
            ['section_id' => 43, 'name' => 'Exp Log Funciones tipo1'],
            ['section_id' => 43, 'name' => 'Exp Log Funciones tipo2'],
            ['section_id' => 43, 'name' => 'Exp Log Funciones tipo3'],
            ['section_id' => 48, 'name' => 'Ecuaciones trigonométricas mas nivel'],
            ['section_id' => 48, 'name' => 'Otras ecuaciones tipo 1'],
            ['section_id' => 48, 'name' => 'Otras ecuaciones tipo 2'],
            ['section_id' => 49, 'name' => 'In Radio Ex Radios'],
            ['section_id' => 56, 'name' => 'Dem identidades trigonométricas usando complex'],
        ];

        foreach ($items as $itemData) {
            $item = new Item($itemData);
            $item->save();
        }
    }
}
