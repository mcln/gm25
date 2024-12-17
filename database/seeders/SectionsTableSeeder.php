<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [

            /* Sector 1 */

            ['chapter_id' => 1, 'name' => 'Axiomas de los Números Reales'],
            ['chapter_id' => 1, 'name' => 'Operatoria en Álgebra'],
            ['chapter_id' => 1, 'name' => 'Raíces'],
            ['chapter_id' => 1, 'name' => 'Ecuaciones I'],
            ['chapter_id' => 1, 'name' => 'Sistema de Ecuaciones'],
            ['chapter_id' => 1, 'name' => 'Problemas Aplicación con Ecs. (ver en Mat. Aplic.)'],
            ['chapter_id' => 1, 'name' => 'Desigualdades'],
            ['chapter_id' => 1, 'name' => 'Expresiones y Ecuaciones II'],
            ['chapter_id' => 1, 'name' => 'Inecuaciones sin raíces y sin valor absoluto'],
            ['chapter_id' => 1, 'name' => 'Inecuaciones con valor absoluto'],
            ['chapter_id' => 1, 'name' => 'Inecuaciones con raíces y mixtas'],
            ['chapter_id' => 1, 'name' => 'Otras Inecuaciones y Sistemas de Inecuaciones'],
            ['chapter_id' => 1, 'name' => 'Problemas de Aplicación con inecuaciones'],
            ['chapter_id' => 1, 'name' => 'Axioma del Supremo'],

            ['chapter_id' => 2, 'name' => 'Razones, Razón propia e impropia'],
            ['chapter_id' => 2, 'name' => 'Proporciones'],
            ['chapter_id' => 2, 'name' => 'Cambio de Unidades'],
            ['chapter_id' => 2, 'name' => 'Porcentajes'],
            ['chapter_id' => 2, 'name' => 'Variación Porcentual'],
            ['chapter_id' => 2, 'name' => 'Proporcionalidad'],
            ['chapter_id' => 2, 'name' => 'Problemas de Planteo'],

            ['chapter_id' => 3, 'name' => 'Lógica'], /* 22 */
            ['chapter_id' => 3, 'name' => 'Cuantificadores'],
            ['chapter_id' => 3, 'name' => 'Conjuntos'],
            ['chapter_id' => 3, 'name' => 'Cardinalidad y Problemas de Aplicación'],
            ['chapter_id' => 3, 'name' => 'Conjunto Potencia'],

            ['chapter_id' => 4, 'name' => 'Inducción Matemática'], /* 27 */
            ['chapter_id' => 4, 'name' => 'Sumatorias'],
            ['chapter_id' => 4, 'name' => 'Productorias'],
            ['chapter_id' => 4, 'name' => 'Progresiones, PA, PG, PH'],
            ['chapter_id' => 4, 'name' => 'Teorema del Binomio y Numero Factorial'],
            ['chapter_id' => 4, 'name' => 'Técnicas de Conteo'],

            ['chapter_id' => 5, 'name' => 'Producto Cartesiano'], /* 33 */
            ['chapter_id' => 5, 'name' => 'Relaciones (en general)'],
            ['chapter_id' => 5, 'name' => 'Geometría Analítica en IRxIR, Cónicas'],
            ['chapter_id' => 5, 'name' => 'Problemas de Aplicación con Geometría Analítica'],

            ['chapter_id' => 6, 'name' => 'Funciones en IRxIR'], /* 37 */
            ['chapter_id' => 6, 'name' => 'Otros tipos de Funciones'],
            ['chapter_id' => 6, 'name' => 'Aplicacion , Modelado de Funciones (Planteo)'],

            ['chapter_id' => 7, 'name' => 'Polinomios'], /* 40 */
            ['chapter_id' => 7, 'name' => 'Fracciones Parciales o Simples'],

            ['chapter_id' => 8, 'name' => 'Exponencial'], /* 42 */
            ['chapter_id' => 8, 'name' => 'Logaritmo'],
            ['chapter_id' => 8, 'name' => 'Miscelánea, Otros'],
            ['chapter_id' => 8, 'name' => 'Problemas de Aplicación: exponencial, logaritmo'],

            ['chapter_id' => 9, 'name' => 'Trigonometría Inicial'], /* 46 */
            ['chapter_id' => 9, 'name' => 'Identidades y Otras'],
            ['chapter_id' => 9, 'name' => 'Ecuaciones e Inecuaciones Trigonométricas'],
            ['chapter_id' => 9, 'name' => 'Ejercicios con Triángulos'],
            ['chapter_id' => 9, 'name' => 'Problemas de Aplicación'],
            ['chapter_id' => 9, 'name' => 'Funciones Trigonométricas'],
            ['chapter_id' => 9, 'name' => 'Otros Tipos'],
            ['chapter_id' => 9, 'name' => 'Funciones Trigonométricas Inversas'],

            ['chapter_id' => 10, 'name' => 'Números Complejos, Inicial, Operatoria'], /* 54 */
            ['chapter_id' => 10, 'name' => 'Ecuaciones, Inecuaciones Complejas, Gráficas'],
            ['chapter_id' => 10, 'name' => 'Otros, Cálculos y Demostraciones'],

            ['chapter_id' => 11, 'name' => 'Vectores, Inicial'], /* 57 */
            ['chapter_id' => 11, 'name' => 'Producto Escalar, Vectorial, Mixto'],
            ['chapter_id' => 11, 'name' => 'Otros Ejercicios Mezclados, Ecs. y Demostraciones'],
            ['chapter_id' => 11, 'name' => 'Aplicaciones Geométricas. Otras'],
            ['chapter_id' => 11, 'name' => 'Aplicaciones Físicas'],

            ['chapter_id' => 12, 'name' => 'Rectas y Planos en IR³'], /* 62 */
            ['chapter_id' => 12, 'name' => 'Ángulos, Intersecciones, Distancias'],
            ['chapter_id' => 12, 'name' => 'Ejercicios Mezclados (combinados)'],
            ['chapter_id' => 12, 'name' => 'Parámetros, Proyectantes'],
            ['chapter_id' => 12, 'name' => 'Demostraciones, Aplicaciones con rectas y planos'],

            /* Sector 2 */

            ['chapter_id' => 13, 'name' => 'Límites'], /* 67 */

            ['chapter_id' => 14, 'name' => 'Continuidad'], /* 68 */

            ['chapter_id' => 15, 'name' => 'Derivadas'], /* 69 */
            ['chapter_id' => 15, 'name' => 'Operatoria de Derivadas'],
            ['chapter_id' => 15, 'name' => 'Inversas'],
            ['chapter_id' => 15, 'name' => 'Otras'],

            ['chapter_id' => 16, 'name' => 'Aplicación de la Derivada'], /* 73 */
            ['chapter_id' => 16, 'name' => 'Aplic. a la Economía (Marginales)'],

            /* Sector 3 */

            ['chapter_id' => 17, 'name' => 'Antiderivada o Primitiva de una Función'], /* 75 */
            ['chapter_id' => 17, 'name' => 'Integral Indefinida'],
            ['chapter_id' => 17, 'name' => 'Métodos de Integración'],
            ['chapter_id' => 17, 'name' => 'Otros temas de la Integral Indefinida'],

            ['chapter_id' => 18, 'name' => 'Integral Definida'], /* 79 */
            ['chapter_id' => 18, 'name' => 'Integral y Sumas de Riemann'],

            ['chapter_id' => 19, 'name' => 'Integral Definida'], /* 81 */
            ['chapter_id' => 19, 'name' => 'Integral y Sumas de Riemann'],

            ['chapter_id' => 20, 'name' => 'Areas'], /* 83 */
            ['chapter_id' => 20, 'name' => 'Longitud'],

            ['chapter_id' => 21, 'name' => 'Volumen y Superficie de Revolución'], /* 85 */
            ['chapter_id' => 21, 'name' => 'Centroides'],

            ['chapter_id' => 22, 'name' => 'Otras Aplicaciones de la Integral Definida'], /* 87 */
            ['chapter_id' => 22, 'name' => 'Aplicación a la Economía'],

            ['chapter_id' => 23, 'name' => 'Integrales Impropias'], /* 89 */
            ['chapter_id' => 23, 'name' => 'Criterios de Comparación'],
            ['chapter_id' => 23, 'name' => 'Áreas de regiones no acotadas'],

            ['chapter_id' => 24, 'name' => 'Sucesiones Numéricas'], /* 92 */
            ['chapter_id' => 24, 'name' => 'Otros Tipos de Sucesiones'],
            ['chapter_id' => 24, 'name' => 'Aplicación de Sucesiones'],

            ['chapter_id' => 25, 'name' => 'Series Numéricas'], /* 95 */
            ['chapter_id' => 25, 'name' => 'Aplicación de Series'],

            ['chapter_id' => 26, 'name' => 'Sucesiones de Funciones'], /* 97 */
            ['chapter_id' => 26, 'name' => 'Series de Funciones'],
            ['chapter_id' => 26, 'name' => 'Series de Potencias'],
            ['chapter_id' => 26, 'name' => 'Series de Taylor'],
            ['chapter_id' => 26, 'name' => 'Series y Errores'],
            ['chapter_id' => 26, 'name' => 'Otras Aplicaciones'],

            /* Sector 4 */

            ['chapter_id' => 27, 'name' => 'Matrices'], /* 103 */

            ['chapter_id' => 28, 'name' => 'Operaciones Elementales'], /* 104 */

            ['chapter_id' => 29, 'name' => 'Determinantes'], /* 105 */

            ['chapter_id' => 30, 'name' => 'Sistemas de Ecuaciones Lineales (SEL)'], /* 106 */

            ['chapter_id' => 31, 'name' => 'Espacios y Subespacios'], /* 107 */

            ['chapter_id' => 32, 'name' => 'Matriz Cambio Base o de Coordenadas'], /* 108 */

            ['chapter_id' => 33, 'name' => 'Transf. o Aplicaciones Lineales'], /* 109 */

            ['chapter_id' => 34, 'name' => 'Diagonalización'], /* 110 */

            ['chapter_id' => 35, 'name' => 'Espacios Euclidianos'], /* 111 */
            ['chapter_id' => 35, 'name' => 'Formas Bilineales y Cuadráticas'],
            ['chapter_id' => 35, 'name' => 'Formas Hermíticas'],
            ['chapter_id' => 35, 'name' => 'Funcionales Lineales y Espacio Dual'],

            /* Sector 5 */

            ['chapter_id' => 36, 'name' => 'Curvas y Superficies de Nivel'], /* 115 */
            ['chapter_id' => 36, 'name' => 'Topología (en IR elevado a n)'],
            ['chapter_id' => 36, 'name' => 'Funciones de Varias Variables'],
            ['chapter_id' => 36, 'name' => 'Límites de Varias Variables'],
            ['chapter_id' => 36, 'name' => 'Continuidad'],

            ['chapter_id' => 37, 'name' => 'Derivadas Parciales de Primer'], /* 120 */
            ['chapter_id' => 37, 'name' => 'Diferenciabilidad'],

            ['chapter_id' => 38, 'name' => 'Regla de la Cadena'], /* 122 */
            ['chapter_id' => 38, 'name' => 'Razón de Cambio (en el tiempo)'],

            ['chapter_id' => 39, 'name' => 'Gradiente de una función'], /* 124 */
            ['chapter_id' => 39, 'name' => 'Derivada Direccional (Razón de Cambio Direccional)'],

            ['chapter_id' => 40, 'name' => 'Funciones implícitas'], /* 126 */
            ['chapter_id' => 40, 'name' => 'Jacobiano'],
            ['chapter_id' => 40, 'name' => 'Función Inversa'],

            ['chapter_id' => 41, 'name' => 'Series de Taylor en Varias Variables'], /* 129 */
            ['chapter_id' => 41, 'name' => 'Máximos y Mínimos'],
            ['chapter_id' => 41, 'name' => 'Optimización'],

            /* Sector 6 */

            ['chapter_id' => 42, 'name' => 'Integrales Dobles'], /* 132 */
            ['chapter_id' => 42, 'name' => 'Aplicaciones de la Integral Doble'],

            ['chapter_id' => 43, 'name' => 'Integrales Triples'], /* 134 */
            ['chapter_id' => 43, 'name' => 'Aplicaciones de la Integral Triple'],

            ['chapter_id' => 44, 'name' => 'Integrales Múltiples Impropias'], /* 136 */
            ['chapter_id' => 44, 'name' => 'Aplicación'],

            ['chapter_id' => 45, 'name' => 'Curvas en IR²y IR³'], /* 138 */
            ['chapter_id' => 45, 'name' => 'Geometría Diferencial'],
            ['chapter_id' => 45, 'name' => 'Coordenadas Curvilíneas'],

            ['chapter_id' => 46, 'name' => 'Integrales de Línea en IR² (dos dimensiones)'], /* 141 */
            ['chapter_id' => 46, 'name' => 'Teorema de Green'],
            ['chapter_id' => 46, 'name' => 'Integrales de Línea en IR³ (tres dimensiones)'],
            ['chapter_id' => 46, 'name' => 'Teorema de Stokes'],

            ['chapter_id' => 47, 'name' => 'Superficies'], /* 145 */
            ['chapter_id' => 47, 'name' => 'Int. de Superficie, con elemento Escalar'],
            ['chapter_id' => 47, 'name' => 'Int. de Superficie, con elemento Vectorial'],
            ['chapter_id' => 47, 'name' => 'Teorema de Gauss'],

            /* Sector 7 */

            ['chapter_id' => 48, 'name' => 'EDO´s de Primer Orden'], /* 149 */
            ['chapter_id' => 48, 'name' => 'Aplicacion de la EDO de Primer Orden'],

            ['chapter_id' => 49, 'name' => 'Definiciones y Teoremas'], /* 151 */
            ['chapter_id' => 49, 'name' => 'Ec. Lineal, Coef. Const. y Homogénea'],

            ['chapter_id' => 50, 'name' => 'Método Coeficientes Indeterminados'], /* 153 */
            ['chapter_id' => 50, 'name' => 'Método de Variación de Parámetros'],
            ['chapter_id' => 50, 'name' => 'Reducción de Orden'],
            ['chapter_id' => 50, 'name' => 'Ecuación de Euler-Cauchy'],
            ['chapter_id' => 50, 'name' => 'Problemas de Aplicación'],

            ['chapter_id' => 51, 'name' => 'Análisis Cualitativo en Edo (orden 1)'], /* 158 */
            ['chapter_id' => 51, 'name' => 'Análisis Cualitativo de Sist. de Edo´s'],

            ['chapter_id' => 52, 'name' => 'Definiciones y Teoremas'], /* 160 */
            ['chapter_id' => 52, 'name' => 'Teoremas y Fórmulas de Transformadas'],
            ['chapter_id' => 52, 'name' => 'Funciones Especiales'],
            ['chapter_id' => 52, 'name' => 'Producto de Convolución'],
            ['chapter_id' => 52, 'name' => 'Métodos para Hallar Inversas'],
            ['chapter_id' => 52, 'name' => 'Aplicaciones de la Transformada de Laplace'],

            ['chapter_id' => 53, 'name' => 'Solución de EDO´s por Series de Taylor'], /* 166 */
            ['chapter_id' => 53, 'name' => 'Método de Frobenius'],
            ['chapter_id' => 53, 'name' => 'Ecuación Dif. de Bessel'],
            ['chapter_id' => 53, 'name' => 'Problemas de Sturm-Liouville'],

            /* Sector 8 */

            ['chapter_id' => 54, 'name' => 'Definiciones y Teoremas'], /* 170 */
            ['chapter_id' => 54, 'name' => 'Aplicación'],

            ['chapter_id' => 55, 'name' => 'Definiciones y Teoremas'], /* 172 */
            ['chapter_id' => 55, 'name' => 'Sol. de EDP por Transf. Fourier (ver EDP)'],

            ['chapter_id' => 56, 'name' => 'Definiciones y Teoremas'], /* 174 */
            ['chapter_id' => 56, 'name' => 'Funciones Especiales'],
            ['chapter_id' => 56, 'name' => 'Derivada Distribucional'],

            /* Sector 9 */

            ['chapter_id' => 57, 'name' => 'Definiciones y Teoremas'], /* 177 */
           
            ['chapter_id' => 58, 'name' => 'Definiciones y Teoremas'], /* 178 */

            ['chapter_id' => 59, 'name' => 'Homogeneas'], /* 179 */
            ['chapter_id' => 59, 'name' => 'No Homogeneas'],

            ['chapter_id' => 60, 'name' => 'Método de Separación de Variables'], /* 181 */

            ['chapter_id' => 61, 'name' => 'Aplicación de Transformada de Fourier'], /* 182 */

            ['chapter_id' => 62, 'name' => 'EDP de Onda'], /* 183 */
            ['chapter_id' => 62, 'name' => 'EDP de Calor'],
            ['chapter_id' => 62, 'name' => 'EDP de Laplace'],

            /* Sector 10 */

            ['chapter_id' => 63, 'name' => 'Operatoria de Números Complejos'], /* 186 */
            ['chapter_id' => 63, 'name' => 'Ejerc. demostrativos de Nos. Complejos'],
            ['chapter_id' => 63, 'name' => 'Topología'],

            ['chapter_id' => 64, 'name' => 'Funciones como Aplicación'], /* 189 */
            ['chapter_id' => 64, 'name' => 'Funciones'],
            ['chapter_id' => 64, 'name' => 'Límites'],
            ['chapter_id' => 64, 'name' => 'Continuidad'],

            ['chapter_id' => 65, 'name' => 'Derivada Compleja'], /* 193 */
            ['chapter_id' => 65, 'name' => 'Singularidades'],
            ['chapter_id' => 65, 'name' => 'Series'],
            ['chapter_id' => 65, 'name' => 'Integración Compleja'],
            ['chapter_id' => 65, 'name' => 'Cálculo de Integrales Impropias'],

        ];

        foreach ($sections as $sectionData) {
            $section = new Section($sectionData);
            $section->save();
        }
    }
}
