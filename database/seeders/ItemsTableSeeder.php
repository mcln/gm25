<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [

            /* Sector 1 - Algebra de Números Reales */ 

            ['section_id' => 1, 'name' => 'demostraciones con operación aditiva'],
            ['section_id' => 1, 'name' => 'demostraciones con operación multiplicativa'],
            ['section_id' => 1, 'name' => 'demostraciones con axioma distributividad'],
            ['section_id' => 1, 'name' => 'demostraciones con implicancias, equivalencias'],


            ['section_id' => 2, 'name' => 'factorización'],
            ['section_id' => 2, 'name' => 'potenciación'],
            ['section_id' => 2, 'name' => 'productos notables'],
            ['section_id' => 2, 'name' => 'amplificación, sumas, restas, fracciones (mcd)'],
            ['section_id' => 2, 'name' => 'simplificación, reducción'],
            ['section_id' => 2, 'name' => 'valorar expresiones, evaluación'],
            ['section_id' => 2, 'name' => 'ejercicios de verdadero y falso'],


            ['section_id' => 3, 'name' => 'reducción en raíces numéricas'],
            ['section_id' => 3, 'name' => 'reducción raíces literales con productos'],
            ['section_id' => 3, 'name' => 'reducción raíces literales sumas'],
            ['section_id' => 3, 'name' => 'racionalización raíces cuadradas'],
            ['section_id' => 3, 'name' => 'racionalización raíces cúbicas y mayor'],
            ['section_id' => 3, 'name' => 'racionalizaciones mezcladas'],
            ['section_id' => 3, 'name' => 'valorar expresiones con raíces'],
            ['section_id' => 3, 'name' => 'ejercicios de verdadero y falso'],


            ['section_id' => 4, 'name' => 'ecuaciones de o reducible a primer grado, numéricas'],
            ['section_id' => 4, 'name' => 'ecuaciones de o reducible a primer grado, literales'],
            ['section_id' => 4, 'name' => 'ecuaciones de o reducible a segundo grado, numéricas'],
            ['section_id' => 4, 'name' => 'ecuaciones de o reducible a segundo grado, literales'],
            ['section_id' => 4, 'name' => 'ejercicios con propiedades de raíces en ec. 2do. grado'],
            ['section_id' => 4, 'name' => 'ecuaciones irracionales, con raíces'],
            ['section_id' => 4, 'name' => 'ecuaciones con variable auxiliar'],


            ['section_id' => 5, 'name' => 'sistema de ecuaciones lineal 2 incógnitas numéricos'],
            ['section_id' => 5, 'name' => 'sistema de ecuaciones lineal 2 incógnitas literal'],
            ['section_id' => 5, 'name' => 'sistema de ecuaciones lineal 3 incógnitas'],
            ['section_id' => 5, 'name' => 'sistema de ecuaciones, desarrollo con variable auxiliar'],
            ['section_id' => 5, 'name' => 'sistema de ecuaciones no lineal'],


            ['section_id' => 6, 'name' => 'Problemas Aplicación con Ecs. (ver en Mat. Aplic.)'],


            ['section_id' => 7, 'name' => 'desigualdades en IR sin valor absoluto'],
            ['section_id' => 7, 'name' => 'desigualdades con valor absoluto, módulo'],


            ['section_id' => 8, 'name' => 'expresiones con valor absoluto, módulo'],
            ['section_id' => 8, 'name' => 'ecuaciones con valor absoluto, módulo'],
            ['section_id' => 8, 'name' => 'expresiones con parte entera, valor máx entero'],
            ['section_id' => 8, 'name' => 'ecuaciones con parte entera, valor máx entero'],


            ['section_id' => 9, 'name' => 'inecuaciones básicas'],
            ['section_id' => 9, 'name' => 'inecuaciones simples'],
            ['section_id' => 9, 'name' => 'inecuaciones nivel medio'],
            ['section_id' => 9, 'name' => 'inecuaciones de mayor nivel'],


            ['section_id' => 10, 'name' => 'inecuaciones con valor absoluto básicas'],
            ['section_id' => 10, 'name' => 'inecuaciones con valor absoluto nivel medio'],
            ['section_id' => 10, 'name' => 'inecuaciones con valor absoluto de mayor nivel'],


            ['section_id' => 11, 'name' => 'inecuaciones irracionales (con raíces)'],
            ['section_id' => 11, 'name' => 'inecuaciones mixtas, mezcladas'],


            ['section_id' => 12, 'name' => 'inecuaciones literales'],
            ['section_id' => 12, 'name' => 'inecuaciones con un parámetro por determinar'],
            ['section_id' => 12, 'name' => 'inecuaciones con parte entera, valor máx entero'],
            ['section_id' => 12, 'name' => 'sistemas de inecuaciones con 1 variable'],


            ['section_id' => 13, 'name' => 'problemas de aplicación con inecuaciones'],


            ['section_id' => 14, 'name' => 'cotas superiores e inferiores, conjuntos acotados'],
            ['section_id' => 14, 'name' => 'maximo y minimo, supremo e ínfimo'],


            /* Sector 1 - Matemáticas Aplicadas */ 


            ['section_id' => 15, 'name' => 'razones propias, impropias, mixtas e inversas'],


            ['section_id' => 16, 'name' => 'constante de proporcionalidad'],
            ['section_id' => 16, 'name' => 'proporciones continuas, proporción continua'],
            ['section_id' => 16, 'name' => 'prop. de las proporciones, componer, descomponer.'],


            ['section_id' => 17, 'name' => 'cambio de unidades, regla de tres'],


            ['section_id' => 18, 'name' => 'porcentajes, tanto por uno, tanto por ciento'],


            ['section_id' => 19, 'name' => 'variación relativa y porcentual'],


            ['section_id' => 20, 'name' => 'proporcionalidad directa e inversa'],


            ['section_id' => 21, 'name' => 'problemas de planteo numéricos'],
            ['section_id' => 21, 'name' => 'problemas de planteo geométricos'],
            ['section_id' => 21, 'name' => 'problemas de planteo económicos'],
            ['section_id' => 21, 'name' => 'problemas de planteo de edades'],
            ['section_id' => 21, 'name' => 'problemas de planteo de caudales'],
            ['section_id' => 21, 'name' => 'problemas de planteo con velocidad'],
            ['section_id' => 21, 'name' => 'problemas de planteo de trabajo'],
            ['section_id' => 21, 'name' => 'otros problemas de planteo miscelaneos'],


            /* Sector 1 - Lógica y Conjuntos  */ 


            ['section_id' => 22, 'name' => 'tablas de verdad'],
            ['section_id' => 22, 'name' => 'lenguaje simbólico'],
            ['section_id' => 22, 'name' => 'conocidas unas prop, det el valor de verdad de otras'],
            ['section_id' => 22, 'name' => 'reducción usando propiedades de lógica'],
            ['section_id' => 22, 'name' => 'conectivos no usuales'],
            ['section_id' => 22, 'name' => 'argumento válido, falacias, usando tablas'],
            ['section_id' => 22, 'name' => 'inferencia, demostraciones'],


            ['section_id' => 23, 'name' => 'cuantificador universal, existencial'],
            ['section_id' => 23, 'name' => 'cuantificadores, lenguaje simbólico'],
            ['section_id' => 23, 'name' => 'propiedades de los cuantificadores'],


            ['section_id' => 24, 'name' => 'extension, comprensión'],
            ['section_id' => 24, 'name' => 'pertenencia e inclusión, subconjunto propio'],
            ['section_id' => 24, 'name' => 'complemento, diferencia, union e interseccion'],
            ['section_id' => 24, 'name' => 'diferencia simétrica de conjuntos'],
            ['section_id' => 24, 'name' => 'demostración de propiedades'],
            ['section_id' => 24, 'name' => 'demostración de subconjuntos, usando propiedades'],
            ['section_id' => 24, 'name' => 'demostración de igualdad con álgebra de conjuntos'],
            ['section_id' => 24, 'name' => 'diagramas de Venn, achurados'],


            ['section_id' => 25, 'name' => 'cardinalidad y propiedades'],
            ['section_id' => 25, 'name' => 'problemas de encuestas usando cardinalidad'],


            ['section_id' => 26, 'name' => 'conjunto potencia'],


            /* Sector 1 - Números Naturales  */ 


            ['section_id' => 27, 'name' => 'inducción con sumas'],
            ['section_id' => 27, 'name' => 'inducción con productos'],
            ['section_id' => 27, 'name' => 'inducción con divisibilidad, múltiplos'],
            ['section_id' => 27, 'name' => 'inducción con desigualdades'],
            ['section_id' => 27, 'name' => 'inducción con sucesiones'],
            ['section_id' => 27, 'name' => 'inducción con exponencial y logaritmos'],
            ['section_id' => 27, 'name' => 'inducción con trigonometría'],
            ['section_id' => 27, 'name' => 'inducción con números complejos'],


            ['section_id' => 28, 'name' => 'sumatorias, conceptuales'],
            ['section_id' => 28, 'name' => 'sumatorias con potencias'],
            ['section_id' => 28, 'name' => 'sumatoria geométrica'],
            ['section_id' => 28, 'name' => 'sumatoria Telescópica'],
            ['section_id' => 28, 'name' => 'ejercicios de sumatoria mezcladas'],
            ['section_id' => 28, 'name' => 'ejercicios con sumatorias dobles'],


            ['section_id' => 29, 'name' => 'productorias'],


            ['section_id' => 30, 'name' => 'progresiones aritméticas PA , normal'],
            ['section_id' => 30, 'name' => 'progresiones aritméticas PA, mas nivel'],
            ['section_id' => 30, 'name' => 'problemas de aplicación con progr. aritméticas PA'],
            ['section_id' => 30, 'name' => 'progresiones geométricas PG , normal'],
            ['section_id' => 30, 'name' => 'progresiones geométricas PG, mas nivel'],
            ['section_id' => 30, 'name' => 'problemas de aplicación con progr. geométricas PG'],
            ['section_id' => 30, 'name' => 'ejercicios con progresiones mezcladas, PA y PG'],
            ['section_id' => 30, 'name' => 'ejercicios de demostraciones con progresiones'],
            ['section_id' => 30, 'name' => 'suma geométrica infinita, serie geométrica'],
            ['section_id' => 30, 'name' => 'progresiones Armónicas (PH)'],


            ['section_id' => 31, 'name' => 'factorial, coeficiente binomial, propiedad de Stieffel'],
            ['section_id' => 31, 'name' => 'ejercicios con teorema del binomio, normal'],
            ['section_id' => 31, 'name' => 'ejercicios con teorema del binomio, más nivel'],
            ['section_id' => 31, 'name' => 'sumatorias, usando teorema del binomio'],
            ['section_id' => 31, 'name' => 'otros ejercicios con teorema del binomio, Trinomios'],


            ['section_id' => 32, 'name' => 'permutaciones'],
            ['section_id' => 32, 'name' => 'combinaciones'],
            ['section_id' => 32, 'name' => 'mezcladas'],


            /* Sector 1 - Relaciones y Geometría Analítica  */ 


            ['section_id' => 33, 'name' => 'pares, tríos ordenados'],
            ['section_id' => 33, 'name' => 'demostración de propiedades del producto cartesiano'],


            ['section_id' => 34, 'name' => 'dominio, recorrido, gráficas de relaciones'],
            ['section_id' => 34, 'name' => 'relaciones inversa, compuesta'],
            ['section_id' => 34, 'name' => 'relaciones que son o no funciones'],
            ['section_id' => 34, 'name' => 'relación de equivalencia, clases, espacio cuociente'],
            ['section_id' => 34, 'name' => 'relación de orden, orden parcial, orden total'],
            ['section_id' => 34, 'name' => 'demostración de propiedades en relaciones'],


            ['section_id' => 35, 'name' => 'puntos, distancia, punto medio'],
            ['section_id' => 35, 'name' => 'rectas'],
            ['section_id' => 35, 'name' => 'circunferencia'],
            ['section_id' => 35, 'name' => 'parabola'],
            ['section_id' => 35, 'name' => 'elipse'],
            ['section_id' => 35, 'name' => 'hipérbola'],
            ['section_id' => 35, 'name' => 'mezclados'],
            ['section_id' => 35, 'name' => 'lugares geométricos'],


            ['section_id' => 36, 'name' => 'Aplicacion de rectas. Modelos lineales'],
            ['section_id' => 36, 'name' => 'Aplicacion de cónicas'],


            /* Sector 1 - Funciones  */ 


            ['section_id' => 37, 'name' => 'relaciones en IRxIR, dominio, recorrido, funcion'],
            ['section_id' => 37, 'name' => 'definicion de funcion desde una relación'],
            ['section_id' => 37, 'name' => 'funciones, valoraciones'],
            ['section_id' => 37, 'name' => 'dominio, codominio y recorrido (rango)'],
            ['section_id' => 37, 'name' => 'álgebra de funciones, suma, resta, mult. y división'],
            ['section_id' => 37, 'name' => 'funciones por tramos, partes o trozos'],
            ['section_id' => 37, 'name' => 'inyectiva, epiyectiva, biyectiva e inversa'],
            ['section_id' => 37, 'name' => 'compuesta (composición) de funciones'],
            ['section_id' => 37, 'name' => 'funcion monotona creciente, decrec y acotada'],
            ['section_id' => 37, 'name' => 'funciones pares e impares'],
            ['section_id' => 37, 'name' => 'demostración en abstracto de propiedades'],


            ['section_id' => 38, 'name' => 'funcion con exponencial y logaritmos'],
            ['section_id' => 38, 'name' => 'función parte entera (maximo entero)'],
            ['section_id' => 38, 'name' => 'funcion signo o de Dirichlet'],
            ['section_id' => 38, 'name' => 'funcion escalon unitario (Heaviside)'],


            ['section_id' => 39, 'name' => 'Aplicacion de Funciones. Modelos en general'],
            ['section_id' => 39, 'name' => 'Funciones Cuadráticas. Máximos, Mínimos'],
            ['section_id' => 39, 'name' => 'Aplicacion de Funciones. Economía'],


            /* Sector 1 - Polinomios  */ 


            ['section_id' => 40, 'name' => 'suma, resta y multiplicación de polinomios'],
            ['section_id' => 40, 'name' => 'división general de polinomios'],
            ['section_id' => 40, 'name' => 'división sintética (Ruffini y Horner)'],
            ['section_id' => 40, 'name' => 'divisibilidad de polinomios'],
            ['section_id' => 40, 'name' => 'teorema del resto y teorema del factor'],
            ['section_id' => 40, 'name' => 'cotas, supremo, ínfimo, Descartes, hallar raíces'],
            ['section_id' => 40, 'name' => 'factorización racional, real, complejo de polinomios'],
            ['section_id' => 40, 'name' => 'dadas algunas raíces, búsqueda de las otras'],
            ['section_id' => 40, 'name' => 'ejercicios con propiedad especial en sus raíces'],
            ['section_id' => 40, 'name' => 'polinomios, otros ejercicios sofisticados'],
            ['section_id' => 40, 'name' => 'asíntotas, polos y ceros, gráfica aproximada'],


            ['section_id' => 41, 'name' => 'fracciones parciales con factores lineales'],
            ['section_id' => 41, 'name' => 'fracciones parciales con factores cuadráticos'],
            ['section_id' => 41, 'name' => 'fracciones parciales con factores mixtos'],


            /* Sector 1 - Exponencial y Logaritmos  */ 


            ['section_id' => 42, 'name' => 'ecuaciones exponenciales'],
            ['section_id' => 42, 'name' => 'inecuaciones exponenciales'],
            ['section_id' => 42, 'name' => 'gráficas aproximadas de funciones exponenciales'],


            ['section_id' => 43, 'name' => 'logaritmos numéricos, desarrollar, calcular'],
            ['section_id' => 43, 'name' => 'logaritmos literales, desarrollar'],
            ['section_id' => 43, 'name' => 'ecuaciones logarítmicas'],
            ['section_id' => 43, 'name' => 'inecuaciones logaritmicas'],
            ['section_id' => 43, 'name' => 'gráficas aproximadas de funciones logarítmicas'],


            ['section_id' => 44, 'name' => 'ecuaciones con exponencial y logaritmo'],
            ['section_id' => 44, 'name' => 'inecuaciones con exponencial y logaritmo'],
            ['section_id' => 44, 'name' => 'sistemas de ecuaciones, exponencial, logaritmo'],
            ['section_id' => 44, 'name' => 'ejcs de demostración con exponencial y logaritmo'],
            ['section_id' => 44, 'name' => 'funciones con exponencial y logaritmo'],
            ['section_id' => 44, 'name' => 'dem. por inducción con exponencial y logaritmo'],
            ['section_id' => 44, 'name' => 'cálculo de sumatorias con exponencial y logaritmo'],


            ['section_id' => 45, 'name' => 'problemas de vida media, material radioactivo'],
            ['section_id' => 45, 'name' => 'problemas de población'],
            ['section_id' => 45, 'name' => 'problemas económicos'],
            ['section_id' => 45, 'name' => 'problemas de otros temas'],


            /* Sector 1 - Trigonometría  */ 


            ['section_id' => 46, 'name' => 'ángulos, radianes, grados sexagesimales'],
            ['section_id' => 46, 'name' => 'funciones trigonometricas de angulos usuales'],
            ['section_id' => 46, 'name' => 'formulas de reduccion (ley del burro, burrito)'],
            ['section_id' => 46, 'name' => 'dada una función trigonométrica, calcular otras'],


            ['section_id' => 47, 'name' => 'identidades trigonométricas, nivel bajo'],
            ['section_id' => 47, 'name' => 'identidades trigonométricas, nivel medio'],
            ['section_id' => 47, 'name' => 'identidades trigonométricas, nivel alto'],
            ['section_id' => 47, 'name' => 'funcion trigonometrica con ángulo desde los típicos'],
            ['section_id' => 47, 'name' => 'funciones trigonometricas con angulos no típicos'],


            ['section_id' => 48, 'name' => 'ecuaciones trigonométricas, simples'],
            ['section_id' => 48, 'name' => 'ecuaciones, que piden soluciones básicas en [0,2pi]'],
            ['section_id' => 48, 'name' => 'ecuaciones trigonométricas, nivel medio'],
            ['section_id' => 48, 'name' => 'otras típicas ecuaciones trigonométricas, usuales'],
            ['section_id' => 48, 'name' => 'ecuaciones trigonométricas, nivel alto'],
            ['section_id' => 48, 'name' => 'sistemas de ecuaciones trigonométricos'],
            ['section_id' => 48, 'name' => 'inecuaciones trigonometricas'],


            ['section_id' => 49, 'name' => 'ejercicios en triángulos rectángulos'],
            ['section_id' => 49, 'name' => 'ejercicios con teoremas: seno, coseno, tangente'],
            ['section_id' => 49, 'name' => 'demostraciones en triángulos cualesquiera'],


            ['section_id' => 50, 'name' => 'problemas de aplicación en triángulos rectángulos'],
            ['section_id' => 50, 'name' => 'problemas de aplicación con teoremas: seno, coseno, tang'],
            ['section_id' => 50, 'name' => 'problemas de aplicación navieros, rumbo, nudos, millas'],
            ['section_id' => 50, 'name' => 'otros problemas de aplicación'],


            ['section_id' => 51, 'name' => 'funciones trigonométricas, dominio, recorrido, etc'],
            ['section_id' => 51, 'name' => 'funciones periódicas, periodo'],
            ['section_id' => 51, 'name' => 'amplitud, periodo, fase, gráfica aproximada'],


            ['section_id' => 52, 'name' => 'demostraciones por inducción'],
            ['section_id' => 52, 'name' => 'ejercicios de verdadero y falso'],


            ['section_id' => 53, 'name' => 'ejercicios de calcular, reducir expresiones'],
            ['section_id' => 53, 'name' => 'identidades de funciones trigonométricas inversas'],
            ['section_id' => 53, 'name' => 'ecuaciones con funciones trigonométricas inversas'],


            /* Sector 1 - Números Complejos  */ 


            ['section_id' => 54, 'name' => 'inicial, forma cartesiana, polar, representaciones'],
            ['section_id' => 54, 'name' => 'operatoria con forma: a+bi (binomial, cartesiana)'],
            ['section_id' => 54, 'name' => 'operatoria con forma polar, cis'],
            ['section_id' => 54, 'name' => 'operatoria con forma de Euler'],
            ['section_id' => 54, 'name' => 'calculo de raices complejas'],


            ['section_id' => 55, 'name' => 'ecuaciones complejas con variable real'],
            ['section_id' => 55, 'name' => 'ecuaciones complejas con variable compleja'],
            ['section_id' => 55, 'name' => 'gráficas de soluciones de ecuaciones, inecuaciones'],


            ['section_id' => 56, 'name' => 'demostraciones de propiedades'],
            ['section_id' => 56, 'name' => 'otros cálculos y demostraciones, nivel medio'],
            ['section_id' => 56, 'name' => 'otros cálculos y demostraciones, más nivel'],
            ['section_id' => 56, 'name' => 'dadas unas expresiones, calcular otras'],
            ['section_id' => 56, 'name' => 'demostracion por induccion con números complejos'],


            /* Sector 1 - Vectores  */ 


            ['section_id' => 57, 'name' => 'vectores dirigidos, representación'],
            ['section_id' => 57, 'name' => 'suma, resta, multiplicación por escalar'],
            ['section_id' => 57, 'name' => 'norma, magnitud (módulo) y vectores unitarios'],
            ['section_id' => 57, 'name' => 'linealmente independientes, dependientes'],


            ['section_id' => 58, 'name' => 'producto punto (escalar), ángulos, ortogonalidad'],
            ['section_id' => 58, 'name' => 'números, cosenos directores'],
            ['section_id' => 58, 'name' => 'producto cruz (vectorial), regla de la mano derecha'],
            ['section_id' => 58, 'name' => 'producto mixto (triple)'],
            ['section_id' => 58, 'name' => 'colineales y coplanares'],
            ['section_id' => 58, 'name' => 'proyección, componente'],


            ['section_id' => 59, 'name' => 'ejercicios mezclados, cálculos, demostraciones, simples'],
            ['section_id' => 59, 'name' => 'ejercicios mezclados, cálculos, demostraciones, más nivel'],
            ['section_id' => 59, 'name' => 'ecuaciones vectoriales'],
            ['section_id' => 59, 'name' => 'demostraciones de propiedades'],
            ['section_id' => 59, 'name' => 'ejercicios de cálculo y demostraciones geometricas'],


            ['section_id' => 60, 'name' => 'area de un triángulo y paralelogramo'],
            ['section_id' => 60, 'name' => 'volumen de un paralelepipedo y piramide'],
            ['section_id' => 60, 'name' => 'otras aplicaciones con vectores'],


            ['section_id' => 61, 'name' => 'fuerzas, estatica, equilibrio'],
            ['section_id' => 61, 'name' => 'torque, momento de rotación'],


            /* Sector 1 - Rectas y Planos en IR³  */ 


            ['section_id' => 62, 'name' => 'ejercicios con rectas'],
            ['section_id' => 62, 'name' => 'ejercicios con planos'],


            ['section_id' => 63, 'name' => 'ángulo entre, rectas, planos, recta-plano, otros'],
            ['section_id' => 63, 'name' => 'intersección entre, rectas, planos, recta-plano, otros'],
            ['section_id' => 64, 'name' => 'distancia de punto a recta, plano, entre rectas, otros'],


            ['section_id' => 64, 'name' => 'ejercicios combinados, rectas y planos, nivel medio'],
            ['section_id' => 64, 'name' => 'ejercicios combinados, rectas y planos, más nivel'],


            ['section_id' => 65, 'name' => 'ejercicios con parámetros por determinar'],
            ['section_id' => 65, 'name' => 'ejercicios de planos proyectantes'],


            ['section_id' => 66, 'name' => 'otros ejercicios, de aplicación, demostraciones'],


            /* Sector 2 - Límites  */ 


            ['section_id' => 67, 'name' => 'dem. de límites según def. Cauchy'],
            ['section_id' => 67, 'name' => 'dem. de límites según def. Heine'],
            ['section_id' => 67, 'name' => 'dem. de no existencia de límites'],
            ['section_id' => 67, 'name' => 'teorema de enlace'],
            ['section_id' => 67, 'name' => 'teorema del acotamiento (sandwich)'],
            ['section_id' => 67, 'name' => 'teorema del cero aniquila'],
            ['section_id' => 67, 'name' => 'lím. de func. polinómicas racionales'],
            ['section_id' => 67, 'name' => 'lím. de func. irracionales (raíces)'],
            ['section_id' => 67, 'name' => 'lím. de func. trigonométricas 1'],
            ['section_id' => 67, 'name' => 'lím. de func. trigonométricas 2'],
            ['section_id' => 67, 'name' => 'lím. de func. exponenciales'],
            ['section_id' => 67, 'name' => 'lím. de func. logarítmicas'],
            ['section_id' => 67, 'name' => 'límites laterales'],
            ['section_id' => 67, 'name' => 'lím. de funciones con valor absoluto'],
            ['section_id' => 67, 'name' => 'lím. de funciones con parte entera'],
            ['section_id' => 67, 'name' => 'lím. de funciones signo o de Dirichlet'],
            ['section_id' => 67, 'name' => 'lím. de función escalón (Heaviside)'],
            ['section_id' => 67, 'name' => 'límites cuando x-->oo (infinito)'],
            ['section_id' => 67, 'name' => 'otros'],


            /* Sector 2 - Continuidad  */ 


            ['section_id' => 68, 'name' => 'tipo de discontinuidad por salto'],
            ['section_id' => 68, 'name' => 'tipo de discontinuidad infinita'],
            ['section_id' => 68, 'name' => 'tipo de discontinuidad oscilación infinita'],
            ['section_id' => 68, 'name' => 'discontinuidades reparables'],
            ['section_id' => 68, 'name' => 'discontinuidades irremediables'],
            ['section_id' => 68, 'name' => 'teorema del valor intermedio'],


            /* Sector 2 - Derivadas  */ 


            ['section_id' => 69, 'name' => 'derivadas con uso de la definición'],
            ['section_id' => 69, 'name' => 'álgebra de der. y derivadas simples'],


            ['section_id' => 70, 'name' => 'func. potenciales con regla de la cadena'],
            ['section_id' => 70, 'name' => 'func. con raíces con regla de la cadena'],
            ['section_id' => 70, 'name' => 'func. trigonométricas con regla de cadena'],
            ['section_id' => 70, 'name' => 'func. exponenciales con regla de cadena'],
            ['section_id' => 70, 'name' => 'func. logarítmicas con regla de la cadena'],
            ['section_id' => 70, 'name' => 'func. hiperbólicas con regla de la cadena'],
            ['section_id' => 70, 'name' => 'miscelánea 1 der. con regla de la cadena'],
            ['section_id' => 70, 'name' => 'miscelánea 2 der. con regla de la cadena'],
            ['section_id' => 70, 'name' => 'der. de la función compuesta (literales)'],


            ['section_id' => 71, 'name' => 'derivadas de la función inversa'],
            ['section_id' => 71, 'name' => 'der. de las func. inversas trigonométricas'],
            ['section_id' => 71, 'name' => 'der. de las func. inversas hiperbólicas'],


            ['section_id' => 72, 'name' => 'miscelánea 3 de der. con regla de cadena'],
            ['section_id' => 72, 'name' => 'derivadas de orden superior'],
            ['section_id' => 72, 'name' => 'fórmula de Leibnitz'],
            ['section_id' => 72, 'name' => 'derivadas laterales'],
            ['section_id' => 72, 'name' => 'derivadas implícitas'],
            ['section_id' => 72, 'name' => 'der. de func. dadas en forma paramétrica'],
            ['section_id' => 72, 'name' => 'der. de func. dadas en coord. polares'],


            /* Sector 2 - Aplicación Derivadas  */ 


            ['section_id' => 73, 'name' => 'interpretación geométrica'],
            ['section_id' => 73, 'name' => 'recta tangente'],
            ['section_id' => 73, 'name' => 'teorema de Rolle'],
            ['section_id' => 73, 'name' => 'teorema del Valor Medio'],
            ['section_id' => 73, 'name' => 'interpretación física'],
            ['section_id' => 73, 'name' => 'rapidez de un móvil'],
            ['section_id' => 73, 'name' => 'otras interpretaciones físicas de la der.'],
            ['section_id' => 73, 'name' => 'razón de cambio (en el tiempo)'],
            ['section_id' => 73, 'name' => 'diferencial de una función'],
            ['section_id' => 73, 'name' => 'aplicación al cálculo de errores'],
            ['section_id' => 73, 'name' => 'regla de L\'Hôpital'],
            ['section_id' => 73, 'name' => 'problemas de optimización'],
            ['section_id' => 73, 'name' => 'máximos y mínimos absolutos'],
            ['section_id' => 73, 'name' => 'creciente y decreciente'],
            ['section_id' => 73, 'name' => 'máximos y mínimos locales o relativos'],
            ['section_id' => 73, 'name' => 'cóncava hacia arriba y abajo (convexa)'],
            ['section_id' => 73, 'name' => 'puntos de inflexión'],
            ['section_id' => 73, 'name' => 'asíntotas horizontales, vert. y oblicuas'],
            ['section_id' => 73, 'name' => 'anál. curvas dadas en forma explícita'],
            ['section_id' => 73, 'name' => 'anál. curvas paramétricas'],


            ['section_id' => 74, 'name' => 'Aplic. a la Economía (Marginales)'],


            /* Sector 3 - Integral Indefinida  */ 


            ['section_id' => 75, 'name' => 'antiderivadas (o primitivas)'],


            ['section_id' => 76, 'name' => 'formulario e integrales directas'],
            ['section_id' => 76, 'name' => 'con desarrollos algebraicos simples'],


            ['section_id' => 77, 'name' => 'sustitución simple'],
            ['section_id' => 77, 'name' => 'integrales trigonométricas'],
            ['section_id' => 77, 'name' => 'integración por partes'],
            ['section_id' => 77, 'name' => 'sustitución trigonométrica'],
            ['section_id' => 77, 'name' => 'sustitución hiperbólica'],
            ['section_id' => 77, 'name' => 'integrales polinómicas racionales'],
            ['section_id' => 77, 'name' => 'método de fracciones parciales'],
            ['section_id' => 77, 'name' => 'método del ángulo medio'],
            ['section_id' => 77, 'name' => 'integrales irracionales (raíces)'],
            ['section_id' => 77, 'name' => 'otros'],


            ['section_id' => 78, 'name' => 'fórmulas de reducción (recurrencia)'],
            ['section_id' => 78, 'name' => 'aplicación de la integral indefinida'],


            /* Sector 3 - Integral de Riemann  */


            ['section_id' => 79, 'name' => 'propiedades'],
            ['section_id' => 79, 'name' => 'teorema fundamental del cálculo'],
            ['section_id' => 79, 'name' => 'teorema de sustitución'],
            ['section_id' => 79, 'name' => 'derivada de una integral'],
            ['section_id' => 79, 'name' => 'integración por partes en integral definida'],
            ['section_id' => 79, 'name' => 'integral de funciones pares e impares'],
            ['section_id' => 79, 'name' => 'integral de funciones periódicas'],


            ['section_id' => 80, 'name' => 'funciones Riemann-integrables'],
            ['section_id' => 80, 'name' => 'lím. sucesión (ver otros tipos de suc.)'],


            /* Sector 3 - Integral Definida  */


            ['section_id' => 81, 'name' => 'propiedades'],
            ['section_id' => 81, 'name' => 'teorema fundamental del cálculo'],
            ['section_id' => 81, 'name' => 'teorema de sustitución'],
            ['section_id' => 81, 'name' => 'derivada de una integral'],
            ['section_id' => 81, 'name' => 'integración por partes en integral definida'],
            ['section_id' => 81, 'name' => 'integral de funciones pares e impares'],
            ['section_id' => 81, 'name' => 'integral de funciones periódicas'],


            ['section_id' => 82, 'name' => 'funciones Riemann-integrables'],
            ['section_id' => 82, 'name' => 'lím. sucesión (ver otros tipos de suc.)'],


            /* Sector 3 - Aplicación 1  */


            ['section_id' => 83, 'name' => 'área entre curvas rectangulares'],
            ['section_id' => 83, 'name' => 'área entre curvas paramétricas'],
            ['section_id' => 83, 'name' => 'área entre curvas en coord. polares'],


            ['section_id' => 84, 'name' => 'long. de curvas en coord. rectangulares'],
            ['section_id' => 84, 'name' => 'long. de curvas en forma paramétrica'],
            ['section_id' => 84, 'name' => 'long. de curvas en coord. polares'],


            /* Sector 3 - Aplicación 2  */


            ['section_id' => 85, 'name' => 'vol. de rev. con curvas rectangulares'],
            ['section_id' => 85, 'name' => 'vol. de rev. con curvas paramétricas'],
            ['section_id' => 85, 'name' => 'vol. de rev. con curvas en polares'],
            ['section_id' => 85, 'name' => 'superf. de rev. con curvas rectangulares'],
            ['section_id' => 85, 'name' => 'superf. de rev. con curvas paramétricas'],
            ['section_id' => 85, 'name' => 'superf. de rev. con curvas polares'],


            ['section_id' => 86, 'name' => 'centro geométrico'],
            ['section_id' => 86, 'name' => 'teorema de Pappus'],


            /* Sector 3 - Otras Aplicaciones  */


            ['section_id' => 87, 'name' => 'volumen de no-revolución'],
            ['section_id' => 87, 'name' => 'función promedio'],
            ['section_id' => 87, 'name' => 'centro de masa'],
            ['section_id' => 87, 'name' => 'momento de inercia'],
            ['section_id' => 87, 'name' => 'presión, temperatura, etc.'],


            ['section_id' => 88, 'name' => 'excedente del consumidor'],
            ['section_id' => 88, 'name' => 'excedente del productor'],


            /* Sector 3 - Integrales Impropias  */


            ['section_id' => 89, 'name' => 'int. impropia de primera especie'],
            ['section_id' => 89, 'name' => 'int. impropia de segunda especie'],
            ['section_id' => 89, 'name' => 'int. impropias mixtas'],


            ['section_id' => 90, 'name' => 'directa o pura'],
            ['section_id' => 90, 'name' => 'al límite o asintótico'],


            ['section_id' => 91, 'name' => 'Áreas de regiones no acotadas'],


            /* Sector 3 - Sucesiones Numéricas  */


            ['section_id' => 92, 'name' => 'definición de sucesión'],
            ['section_id' => 92, 'name' => 'lím. de suc. con "n elevado a número"'],
            ['section_id' => 92, 'name' => 'lím. de suc. con "número elevado a n"'],
            ['section_id' => 92, 'name' => 'teo. acotamiento (sandwich)'],
            ['section_id' => 92, 'name' => 'sub sucesiones'],
            ['section_id' => 92, 'name' => 'lím. de suc. con forma. "(1+1/n) elev. a n"'],
            ['section_id' => 92, 'name' => 'lím. de suc. con regla de L\'Hôpital'],
            ['section_id' => 92, 'name' => 'sucesiones acotadas'],
            ['section_id' => 92, 'name' => 'suc. crecientes y decrecientes'],
            ['section_id' => 92, 'name' => 'sucesiones monótonas'],
            ['section_id' => 92, 'name' => 'sucesiones recursivas (recurrencia)'],


            ['section_id' => 93, 'name' => 'lím. de suc. que contienen sumatorias'],
            ['section_id' => 93, 'name' => 'lím. de suc. con criterio de Stolz'],
            ['section_id' => 93, 'name' => 'lím. de suc. con integral de Riemann'],
            ['section_id' => 93, 'name' => 'sucesiones de Cauchy'],
            ['section_id' => 93, 'name' => 'suc. recursivas oscilantes amortiguadas'],


            ['section_id' => 94, 'name' => 'Aplicación de Sucesiones'],


            /* Sector 3 - Series Numéricas  */


            ['section_id' => 95, 'name' => 'definición de una serie'],
            ['section_id' => 95, 'name' => 'sucesión de sumas parciales'],
            ['section_id' => 95, 'name' => 'sucesión interna'],
            ['section_id' => 95, 'name' => 'resto de una serie'],
            ['section_id' => 95, 'name' => 'serie geométrica'],
            ['section_id' => 95, 'name' => 'cálculo de series con prop. telescópica'],
            ['section_id' => 95, 'name' => 'criterio (o test) de la divergencia'],
            ['section_id' => 95, 'name' => 'serie p-armónica'],
            ['section_id' => 95, 'name' => 'criterio (o test) de comparación directa'],
            ['section_id' => 95, 'name' => 'criterio de comp. al lím. (asintótico)'],
            ['section_id' => 95, 'name' => 'criterio (o test) de la integral'],
            ['section_id' => 95, 'name' => 'convergencia absoluta y condicional'],
            ['section_id' => 95, 'name' => 'criterio (o test) de conv. absoluta'],
            ['section_id' => 95, 'name' => 'criterio (o test) de Leibniz'],
            ['section_id' => 95, 'name' => 'truncar una serie alternada. Error'],
            ['section_id' => 95, 'name' => 'criterio (o test) de la Razón (D\'Alembert)'],
            ['section_id' => 95, 'name' => 'criterio (o test) de Raabe'],
            ['section_id' => 95, 'name' => 'criterio (o test) de la Raíz'],
            ['section_id' => 95, 'name' => 'criterio (o test) de Dirichlet'],
            ['section_id' => 95, 'name' => 'criterio (o test) de Abel'],
            ['section_id' => 95, 'name' => 'criterio (o test) de Kummers'],
            ['section_id' => 95, 'name' => 'criterio (o test) de Gauss'],
            ['section_id' => 95, 'name' => 'eliminación e inserción de paréntesis'],


            ['section_id' => 96, 'name' => 'Aplicación de Series'],


            /* Sector 3 - Suc. y Series de Funciones  */


            ['section_id' => 97, 'name' => 'Sucesiones de Funciones'],


            ['section_id' => 98, 'name' => 'convergencia puntual'],
            ['section_id' => 98, 'name' => 'convergencia uniforme'],
            ['section_id' => 98, 'name' => 'teorema de Weierstrass'],
            ['section_id' => 98, 'name' => 'teo. para derivada e integral de series'],


            ['section_id' => 99, 'name' => 'intervalo de convergencia'],
            ['section_id' => 99, 'name' => 'radio de convergencia'],
            ['section_id' => 99, 'name' => 'dominio de convergencia'],
            ['section_id' => 99, 'name' => 'series geométricas disfrazadas'],


            ['section_id' => 100, 'name' => 'desarrollo en serie de Taylor, con def.'],
            ['section_id' => 100, 'name' => 'polinomio de Taylor'],
            ['section_id' => 100, 'name' => 'series de McLaurin'],
            ['section_id' => 100, 'name' => 'series de McLaurin típicas'],


            ['section_id' => 101, 'name' => 'Resto de Taylor y Lagrange'],
            ['section_id' => 101, 'name' => 'cálculo de sumas aproximadas'],
            ['section_id' => 101, 'name' => 'approx. de func. con polinomios de Taylor'],


            ['section_id' => 102, 'name' => 'Otras Aplicaciones'],


            /* Sector 4 - Matrices  */


            ['section_id' => 103, 'name' => 'suma, resta y multiplicación por escalar'],
            ['section_id' => 103, 'name' => 'igualación de matrices'],
            ['section_id' => 103, 'name' => 'multiplicación de matrices'],
            ['section_id' => 103, 'name' => 'aplicación 1 de matrices'],
            ['section_id' => 103, 'name' => 'matrices conmutables (anti conmutables)'],
            ['section_id' => 103, 'name' => 'matrices: triangulares, diagonales'],
            ['section_id' => 103, 'name' => 'matrices: tridiagonales, de Banda'],
            ['section_id' => 103, 'name' => 'potencias de una matriz'],
            ['section_id' => 103, 'name' => 'valoración en polinomios'],
            ['section_id' => 103, 'name' => 'traspuesta de una matriz'],
            ['section_id' => 103, 'name' => 'matrices simétricas (antisimétricas)'],
            ['section_id' => 103, 'name' => 'inversa de una matriz de 2x2'],
            ['section_id' => 103, 'name' => 'matrices complejas'],
            ['section_id' => 103, 'name' => 'matrices hermíticas (anti hermitianas)'],


            /* Sector 4 - Operaciones Elementales  */


            ['section_id' => 104, 'name' => 'operaciones elementales filas y columnas'],
            ['section_id' => 104, 'name' => 'matrices elementales'],
            ['section_id' => 104, 'name' => 'matriz escalonada'],
            ['section_id' => 104, 'name' => 'matriz pivoteada'],
            ['section_id' => 104, 'name' => 'matriz triangularizada'],
            ['section_id' => 104, 'name' => 'matriz escalonada reducida por filas'],
            ['section_id' => 104, 'name' => 'descomposición LU'],
            ['section_id' => 104, 'name' => 'rango de una matriz'],
            ['section_id' => 104, 'name' => 'inversas de matrices con orden > 2x2'],
            ['section_id' => 104, 'name' => 'ejercicios de verdadero y falso'],


            /* Sector 4 - Determinantes  */


            ['section_id' => 105, 'name' => 'cálculo de determinantes'],
            ['section_id' => 105, 'name' => 'método de Sarrus - Ruffini'],
            ['section_id' => 105, 'name' => 'desarrollo de Laplace'],
            ['section_id' => 105, 'name' => 'menores y cofactores'],
            ['section_id' => 105, 'name' => 'rango de una matriz'],
            ['section_id' => 105, 'name' => 'matriz adjunta'],
            ['section_id' => 105, 'name' => 'cálculo de inversas de matrices'],
            ['section_id' => 105, 'name' => 'ejercicios de verdadero y falso'],
            ['section_id' => 105, 'name' => 'otros'],
            ['section_id' => 105, 'name' => 'producto cruz (véase vectores)'],


            /* Sector 4 - Sistemas de Ecs. Lineales (SEL)  */


            ['section_id' => 106, 'name' => 'clasificación de SEL'],
            ['section_id' => 106, 'name' => 'SEL consistentes o compatibles'],
            ['section_id' => 106, 'name' => 'SEL inconsistentes o incompatibles'],
            ['section_id' => 106, 'name' => 'SEL indeterminados'],
            ['section_id' => 106, 'name' => 'SEL rectangulares (Gauss-Jordan)'],
            ['section_id' => 106, 'name' => 'SEL cuadrados y método de Cramer'],
            ['section_id' => 106, 'name' => 'ejercicios de verdadero y falso'],
            ['section_id' => 106, 'name' => 'otros'],


            /* Sector 4 - Espacios Vectoriales  */


            ['section_id' => 107, 'name' => 'estructuras algebraicas de grupo'],
            ['section_id' => 107, 'name' => 'estructuras algebraicas de cuerpo'],
            ['section_id' => 107, 'name' => 'espacios vectoriales'],
            ['section_id' => 107, 'name' => 'subespacios vectoriales'],
            ['section_id' => 107, 'name' => 'intersección, suma y unión'],
            ['section_id' => 107, 'name' => 'combinación lineal'],
            ['section_id' => 107, 'name' => 'linealmente dependiente e independiente'],
            ['section_id' => 107, 'name' => 'sistema de generadores'],
            ['section_id' => 107, 'name' => 'subespacio generado (engendrado)'],
            ['section_id' => 107, 'name' => 'base de un subespacio'],
            ['section_id' => 107, 'name' => 'dimensión de un subespacio'],
            ['section_id' => 107, 'name' => 'suma directa'],
            ['section_id' => 107, 'name' => 'teorema de la dimensión'],
            ['section_id' => 107, 'name' => 'teorema de sustitución'],
            ['section_id' => 107, 'name' => 'teorema de extensión'],


            /* Sector 4 - Matriz Cambio Base  */


            ['section_id' => 108, 'name' => 'coordenadas respecto a una base'],
            ['section_id' => 108, 'name' => 'matriz de transición, cambio base o de pasaje'],
            ['section_id' => 108, 'name' => 'propiedades'],
            ['section_id' => 108, 'name' => 'aplicación a la rotación de ejes'],


            /* Sector 4 - Transformaciones Lineales  */


            ['section_id' => 109, 'name' => 'Kernel o Núcleo de una transf. lineal'],
            ['section_id' => 109, 'name' => 'transformación lineal inyectiva'],
            ['section_id' => 109, 'name' => 'imágen o recorrido de una transf. lineal'],
            ['section_id' => 109, 'name' => 'transformación lineal epiyectiva'],
            ['section_id' => 109, 'name' => 'monomorfismos'],
            ['section_id' => 109, 'name' => 'epimorfismos'],
            ['section_id' => 109, 'name' => 'endomorfismos'],
            ['section_id' => 109, 'name' => 'isomorfismos'],
            ['section_id' => 109, 'name' => 'operadores'],
            ['section_id' => 109, 'name' => 'operadores diferenciales (véase EDOs)'],
            ['section_id' => 109, 'name' => 'inversa de una transformación lineal'],
            ['section_id' => 109, 'name' => 'suma y resta de transf. lineales'],
            ['section_id' => 109, 'name' => 'compuesta de transf. lineales'],
            ['section_id' => 109, 'name' => 'matriz asociada a una transf. lineal'],
            ['section_id' => 109, 'name' => 'propiedades de la matriz de asociada'],


            /* Sector 4 - Diagonalización  */


            ['section_id' => 110, 'name' => 'valores propios o característicos, autovalores'],
            ['section_id' => 110, 'name' => 'vectores propios o característicos, autovectores'],
            ['section_id' => 110, 'name' => 'espacios propios o nulos (Autoespacios)'],
            ['section_id' => 110, 'name' => 'matrices diagonalizables'],
            ['section_id' => 110, 'name' => 'transformaciones diagonalizables'],
            ['section_id' => 110, 'name' => 'teorema Cayley-Hamilton'],
            ['section_id' => 110, 'name' => 'formas canónicas de Jordan'],
            ['section_id' => 110, 'name' => 'aplicación a cadenas de Markov'],


            /* Sector 4 - Espacios Euclidianos  */


            ['section_id' => 111, 'name' => 'producto interno, punto, interior'],
            ['section_id' => 111, 'name' => 'norma, ángulo y dist. entre vectores'],
            ['section_id' => 111, 'name' => 'conjuntos ortogonales y ortonormales'],
            ['section_id' => 111, 'name' => 'ortogonalización de Gram-Schmidt'],
            ['section_id' => 111, 'name' => 'matrices ortogonales'],
            ['section_id' => 111, 'name' => 'descomposición QR'],
            ['section_id' => 111, 'name' => 'mínimos cuadrados'],


            ['section_id' => 112, 'name' => 'Formas Bilineales y Cuadráticas'],


            ['section_id' => 113, 'name' => 'Formas Hermíticas'],


            ['section_id' => 114, 'name' => 'Funcionales Lineales y Espacio Dual'],


            /* Sector 5 - Funciones, Limites  */


            ['section_id' => 115, 'name' => 'Curvas y Superficies de Nivel'],


            ['section_id' => 116, 'name' => 'conjuntos abiertos, cerrados'],
            ['section_id' => 116, 'name' => 'puntos fronteras e interiores'],
            ['section_id' => 116, 'name' => 'puntos de acumulación'],
            ['section_id' => 116, 'name' => 'conjuntos acotados y conexos'],
            ['section_id' => 116, 'name' => 'conjuntos convexos y compactos'],


            ['section_id' => 117, 'name' => 'funciones escalares'],
            ['section_id' => 117, 'name' => 'funciones vectoriales'],
            ['section_id' => 117, 'name' => 'dominio y recorrido'],
            ['section_id' => 117, 'name' => 'curvas de nivel de una función dada'],


            ['section_id' => 118, 'name' => 'dem. de límite usando la definición'],
            ['section_id' => 118, 'name' => 'límites iterados'],
            ['section_id' => 118, 'name' => 'teorema de acotamiento (Sandwich)'],
            ['section_id' => 118, 'name' => 'trayectorias: rectas, parábolas, etc.'],


            ['section_id' => 119, 'name' => 'continuidad reparable'],
            ['section_id' => 119, 'name' => 'discontinuidad irreparable'],


            /* Sector 5 - Derivadas Parciales  */


            ['section_id' => 120, 'name' => 'definición'],
            ['section_id' => 120, 'name' => 'derivadas de funciones escalares'],
            ['section_id' => 120, 'name' => 'orden superior'],
            ['section_id' => 120, 'name' => 'derivada de una integral'],
            ['section_id' => 120, 'name' => 'derivada de funciones vectoriales'],
            ['section_id' => 120, 'name' => 'matriz Jacobiana'],


            ['section_id' => 121, 'name' => 'funciones diferenciables'],
            ['section_id' => 121, 'name' => 'definiciones y teoremas'],
            ['section_id' => 121, 'name' => 'errores e incrementos'],
            ['section_id' => 121, 'name' => 'cálculo aproximado usando la diferencial'],


            /* Sector 5 - Regla de la Cadena  */


            ['section_id' => 122, 'name' => 'derivadas de primer orden'],
            ['section_id' => 122, 'name' => 'arbolito'],
            ['section_id' => 122, 'name' => 'derivadas de segundo orden'],


            ['section_id' => 123, 'name' => 'Razón de Cambio (en el tiempo)'],


            /* Sector 5 - Gradiente y Aplicaciones  */


            ['section_id' => 124, 'name' => 'plano tangente y recta normal'],
            ['section_id' => 124, 'name' => 'recta tangente'],
            ['section_id' => 124, 'name' => 'derivadas de segundo orden'],
            ['section_id' => 124, 'name' => 'ángulo entre superficies'],


            ['section_id' => 125, 'name' => 'Derivada Direccional (Razón de Cambio Direccional)'],


            /* Sector 5 - Func. Implícitas e Inversas  */


            ['section_id' => 126, 'name' => 'variables dependientes'],
            ['section_id' => 126, 'name' => 'variables independientes (libres)'],


            ['section_id' => 127, 'name' => 'definición y propiedades de Jacobianos'],
            ['section_id' => 127, 'name' => 'condición de existencia de derivadas'],


            ['section_id' => 128, 'name' => 'dominio y recorrido'],
            ['section_id' => 128, 'name' => 'condiciones de existencia'],
            ['section_id' => 128, 'name' => 'Imagen de transformaciones'],
            ['section_id' => 128, 'name' => 'inversa de una función'],


            /* Sector 5 - Series de Taylor y Max./Min.  */


            ['section_id' => 129, 'name' => 'Series de Taylor en Varias Variables'],


            ['section_id' => 130, 'name' => 'criterio por vecindades'],
            ['section_id' => 130, 'name' => 'forma cuadrática Hessiano'],
            ['section_id' => 130, 'name' => 'matriz Hessiana'],


            ['section_id' => 131, 'name' => 'función objetivo'],
            ['section_id' => 131, 'name' => 'ecuaciones condiciones (restricciones)'],
            ['section_id' => 131, 'name' => 'multiplicadores de Lagrange'],
            ['section_id' => 131, 'name' => 'matriz Orlada'],


            /* Sector 6 - Integrales Dobles  */


            ['section_id' => 132, 'name' => 'cálculo de integrales dobles'],
            ['section_id' => 132, 'name' => 'invertir el orden de integración'],
            ['section_id' => 132, 'name' => 'uso de cambio de coord. arbitrario'],
            ['section_id' => 132, 'name' => 'cambio de coordenadas a polares'],


            ['section_id' => 133, 'name' => 'áreas en coord. rectangulares'],
            ['section_id' => 133, 'name' => 'áreas en coord. polares'],
            ['section_id' => 133, 'name' => 'volumen en coord. rectangulares'],
            ['section_id' => 133, 'name' => 'función promedio'],
            ['section_id' => 133, 'name' => 'centros geométricos (centroides)'],
            ['section_id' => 133, 'name' => 'masa de una lámina'],
            ['section_id' => 133, 'name' => 'centro de masa de una lámina'],
            ['section_id' => 133, 'name' => 'momento de inercia de una lámina'],


            /* Sector 6 - Integrales Triples  */


            ['section_id' => 134, 'name' => 'cálculo de integrales triples'],
            ['section_id' => 134, 'name' => 'cambiar el orden de integración'],
            ['section_id' => 134, 'name' => 'uso de cambio de coord. arbitrario'],
            ['section_id' => 134, 'name' => 'cambio de coordenadas a cilíndricas'],
            ['section_id' => 134, 'name' => 'cambio de coordenadas a esféricas'],


            ['section_id' => 135, 'name' => 'volumen en coord. rectangulares'],
            ['section_id' => 135, 'name' => 'volumen en coord. cilíndricas'],
            ['section_id' => 135, 'name' => 'volumen en coord. esféricas'],
            ['section_id' => 135, 'name' => 'función promedio'],
            ['section_id' => 135, 'name' => 'centros geométricos (centroides)'],
            ['section_id' => 135, 'name' => 'masa de un sólido'],
            ['section_id' => 135, 'name' => 'centro de masa de un sólido'],
            ['section_id' => 135, 'name' => 'momento de inercia de un sólido'],


            /* Sector 6 - Int. Múltiples Impropias  */


            ['section_id' => 136, 'name' => 'definición'],
            ['section_id' => 136, 'name' => 'integrales de primera especie'],
            ['section_id' => 136, 'name' => 'integrales de segunda especie'],
            ['section_id' => 136, 'name' => 'integrales mixtas'],
            ['section_id' => 136, 'name' => 'criterios de convergencia'],


            ['section_id' => 137, 'name' => 'Aplicación'],


            /* Sector 6 - Curvas, Rotor y Divergencia  */


            ['section_id' => 138, 'name' => 'representación vectorial de una curva'],
            ['section_id' => 138, 'name' => 'parametrización con parámetro "t"'],
            ['section_id' => 138, 'name' => 'parametrización con parámetro "s"'],
            ['section_id' => 138, 'name' => 'longitud de una curva'],


            ['section_id' => 139, 'name' => 'vector tangente'],
            ['section_id' => 139, 'name' => 'vector normal'],
            ['section_id' => 139, 'name' => 'vector binormal'],
            ['section_id' => 139, 'name' => 'fórmulas Serret-Frenet'],
            ['section_id' => 139, 'name' => 'plano normal, rectificante y osculador'],
            ['section_id' => 139, 'name' => 'curvatura y torsión'],
            ['section_id' => 139, 'name' => 'radios de curvatura y torsión'],
            ['section_id' => 139, 'name' => 'velocidad y aceleración'],


            ['section_id' => 140, 'name' => 'coeficientes métricos'],
            ['section_id' => 140, 'name' => 'superficies coordenadas'],
            ['section_id' => 140, 'name' => 'coordenadas ortogonales'],
            ['section_id' => 140, 'name' => 'gradiente y laplaciano'],
            ['section_id' => 140, 'name' => 'divergencia y rotor'],


            /* Sector 6 - Integrales de Línea  */


            ['section_id' => 141, 'name' => 'integrales de línea con parámetro "s"'],
            ['section_id' => 141, 'name' => 'cálculo de la masa de una curva (alambre)'],
            ['section_id' => 141, 'name' => 'centro de masa de una curva (alambre)'],
            ['section_id' => 141, 'name' => 'momento de inercia de una curva (alambre)'],
            ['section_id' => 141, 'name' => 'integrales de línea con parámetro "t"'],
            ['section_id' => 141, 'name' => 'campos conservativos (gradientes)'],
            ['section_id' => 141, 'name' => 'trabajo efectuado por una fuerza f'],
            ['section_id' => 141, 'name' => 'función potencial (potencial escalar)'],


            ['section_id' => 142, 'name' => 'hipótesis del teorema de Green'],
            ['section_id' => 142, 'name' => 'trabajo efectuado por una fuerza f'],
            ['section_id' => 142, 'name' => 'integral en región múltiplemente conexa'],


            ['section_id' => 143, 'name' => 'integrales de línea con parámetro "s"'],
            ['section_id' => 143, 'name' => 'cálculo de la masa de una curva (alambre)'],
            ['section_id' => 143, 'name' => 'centro de masa de una curva (alambre)'],
            ['section_id' => 143, 'name' => 'momento de inercia de una curva (alambre)'],
            ['section_id' => 143, 'name' => 'integrales de línea con parámetro "t"'],
            ['section_id' => 143, 'name' => 'campos conservativos (gradientes)'],
            ['section_id' => 143, 'name' => 'trabajo efectuado por una fuerza f'],
            ['section_id' => 143, 'name' => 'función potencial (potencial escalar)'],


            ['section_id' => 144, 'name' => 'hipótesis del teorema de Stokes'],
            ['section_id' => 144, 'name' => 'trabajo efectuado por una fuerza f'],
            ['section_id' => 144, 'name' => 'integral en región múltiplemente conexa'],


            /* Sector 6 - Integrales de Superficie  */


            ['section_id' => 145, 'name' => 'superficie orientable'],
            ['section_id' => 145, 'name' => 'cinta o banda de Mobius'],
            ['section_id' => 145, 'name' => 'botella o garrafa de Klein'],


            ['section_id' => 146, 'name' => 'cálculo de integrales de superficie'],
            ['section_id' => 146, 'name' => 'cálculo de la masa de una lámina'],
            ['section_id' => 146, 'name' => 'centro de masa de una lámina'],
            ['section_id' => 146, 'name' => 'momento de inercia de una lámina'],


            ['section_id' => 147, 'name' => 'cálculo de integrales de superficie'],
            ['section_id' => 147, 'name' => 'aplicación'],


            ['section_id' => 148, 'name' => 'hipótesis del teorema de Gauss'],
            ['section_id' => 148, 'name' => 'flujo efectuado por un Campo f'],
            ['section_id' => 148, 'name' => 'regiones volumétricas con hoyos'],


            /* Sector 7 - EDO's de Primer Orden  */


            ['section_id' => 149, 'name' => 'variables separables (separadas)'],
            ['section_id' => 149, 'name' => 'tipo homogéneas'],
            ['section_id' => 149, 'name' => 'traslación'],
            ['section_id' => 149, 'name' => 'ecuación diferencial exacta'],
            ['section_id' => 149, 'name' => 'factor de integrante (o de exactitud)'],
            ['section_id' => 149, 'name' => 'ec. dif. exacta (simple inspección)'],
            ['section_id' => 149, 'name' => 'otros factores de integración'],
            ['section_id' => 149, 'name' => 'ecuación diferencial lineal'],
            ['section_id' => 149, 'name' => 'ecuación de Bernoulli'],
            ['section_id' => 149, 'name' => 'ecuación de Riccati'],


            ['section_id' => 150, 'name' => 'problemas con ec. de var. separables'],
            ['section_id' => 150, 'name' => 'problemas con ec. tipo homogénea'],
            ['section_id' => 150, 'name' => 'problemas con ec. exacta'],
            ['section_id' => 150, 'name' => 'problemas con ec. dif. lineal'],


            /* Sector 7 - Operadores Dif. Lineales  */


            ['section_id' => 151, 'name' => 'problema de Cauchy'],
            ['section_id' => 151, 'name' => 'funciones Lipschitzianas'],
            ['section_id' => 151, 'name' => 'espacio solución'],
            ['section_id' => 151, 'name' => 'Kernel o Núcleo del operador'],
            ['section_id' => 151, 'name' => 'Wonskiano. Soluciones LI'],
            ['section_id' => 151, 'name' => 'fórmulas de Abel'],


            ['section_id' => 152, 'name' => 'sol. bajo raíces reales distintas'],
            ['section_id' => 152, 'name' => 'sol. bajo raíces reales repetidas'],
            ['section_id' => 152, 'name' => 'sol. bajo raíces reales complejas'],
            ['section_id' => 152, 'name' => 'sol. general y cálculo de constantes'],


            /* Sector 7 - Sol. Part. y Reduc. Orden  */


            ['section_id' => 153, 'name' => 'anuladores (aniquiladores)'],
            ['section_id' => 153, 'name' => 'cálculo de coeficientes'],


            ['section_id' => 154, 'name' => 'normalización de la EDO'],
            ['section_id' => 154, 'name' => 'forma de la solución particular'],
            ['section_id' => 154, 'name' => 'cálculo de coeficientes'],
            ['section_id' => 154, 'name' => 'función de Green'],


            ['section_id' => 155, 'name' => 'Reducción de Orden'],


            ['section_id' => 156, 'name' => 'Ecuación de Euler-Cauchy'],


            ['section_id' => 157, 'name' => 'Problemas de Aplicación'],


            /* Sector 7 - Teoría Cualitativa  */


            ['section_id' => 158, 'name' => 'puntos de equilibrios'],
            ['section_id' => 158, 'name' => 'atractor y repulsor'],
            ['section_id' => 158, 'name' => 'forma de la solución'],
            ['section_id' => 158, 'name' => 'uso de coord. polares (espirales, focos)'],
            ['section_id' => 158, 'name' => 'problemas de aplicación'],


            ['section_id' => 159, 'name' => 'puntos de equilibrios'],
            ['section_id' => 159, 'name' => 'nodos atractores y repulsores'],
            ['section_id' => 159, 'name' => 'sillas (fuentes)'],
            ['section_id' => 159, 'name' => 'nodos de una tangente atractor y repulsor'],
            ['section_id' => 159, 'name' => 'nodos estelares atractor y repulsor'],
            ['section_id' => 159, 'name' => 'centros'],
            ['section_id' => 159, 'name' => 'focos (espirales) atractor y repulsor'],
            ['section_id' => 159, 'name' => 'uso de coord. polares'],
            ['section_id' => 159, 'name' => 'ciclos límites'],
            ['section_id' => 159, 'name' => 'problemas de aplicación'],


            /* Sector 7 - Transformada de Laplace  */


            ['section_id' => 160, 'name' => 'definición de transformada de Laplace'],
            ['section_id' => 160, 'name' => 'funciones de orden exponencial'],
            ['section_id' => 160, 'name' => 'funciones continuas por tramos (seccional)'],
            ['section_id' => 160, 'name' => 'propiedades de la transformada de Laplace'],
            ['section_id' => 160, 'name' => 'transformada inversa'],
            ['section_id' => 160, 'name' => 'transformadas de funciones simples'],


            ['section_id' => 161, 'name' => 'primer teorema de traslación'],
            ['section_id' => 161, 'name' => 'función escalón unitario (Heaviside)'],
            ['section_id' => 161, 'name' => 'segundo teorema de traslación'],
            ['section_id' => 161, 'name' => 'teorema de dilatación'],
            ['section_id' => 161, 'name' => 'multiplicación por "t"'],
            ['section_id' => 161, 'name' => 'división por "t"'],
            ['section_id' => 161, 'name' => 'transformada de funciones periódicas'],
            ['section_id' => 161, 'name' => 'transformada de la derivada'],
            ['section_id' => 161, 'name' => 'transformada de la integral'],


            ['section_id' => 162, 'name' => 'función Gamma'],
            ['section_id' => 162, 'name' => 'función Escalón de Heaviside'],
            ['section_id' => 162, 'name' => 'función Impulso o Delta de Dirac'],


            ['section_id' => 163, 'name' => 'Producto de Convolución'],


            ['section_id' => 164, 'name' => 'formación de cuadrados'],
            ['section_id' => 164, 'name' => 'uso de fracciones simples o parciales'],
            ['section_id' => 164, 'name' => 'uso del producto de convolución'],


            ['section_id' => 165, 'name' => 'resolución de ecuaciones diferenciales'],
            ['section_id' => 165, 'name' => 'resolución de ecs. integro-diferenciales'],
            ['section_id' => 165, 'name' => 'resolución de sist. de ecs. diferenciales'],
            ['section_id' => 165, 'name' => 'cálculo de integrales impropias'],
            ['section_id' => 165, 'name' => 'problemas de aplicación'],


            /* Sector 7 - Sol por Series, Bessel, Storm  */


            ['section_id' => 166, 'name' => 'funciones analíticas'],
            ['section_id' => 166, 'name' => 'solución mediante una serie de Taylor'],


            ['section_id' => 167, 'name' => 'puntos singulares'],
            ['section_id' => 167, 'name' => 'punto singular-regular y singular-irregular'],
            ['section_id' => 167, 'name' => 'ecuación indicial'],
            ['section_id' => 167, 'name' => 'casos en el método de Frobenius'],


            ['section_id' => 168, 'name' => 'solución de primera clase'],
            ['section_id' => 168, 'name' => 'solución de segunda clase'],
            ['section_id' => 168, 'name' => 'propiedades'],
            ['section_id' => 168, 'name' => 'problemas varios'],


            ['section_id' => 169, 'name' => 'def. del problema de Sturm-Liouville'],
            ['section_id' => 169, 'name' => 'funciones peso o ponderación'],
            ['section_id' => 169, 'name' => 'valores propios y funciones propias'],
            ['section_id' => 169, 'name' => 'expansión de funciones en series'],
            ['section_id' => 169, 'name' => 'prob. de Sturm-Liouville asociado'],
            ['section_id' => 169, 'name' => 'resolución de Edo\'s homogéneas'],


            /* Sector 8 - Series de Fourier  */


            ['section_id' => 170, 'name' => 'producto interno y ortogonalidad'],
            ['section_id' => 170, 'name' => 'serie de Fourier arbitraria'],
            ['section_id' => 170, 'name' => 'coeficientes de Fourier'],
            ['section_id' => 170, 'name' => 'convergencia en promedio'],
            ['section_id' => 170, 'name' => 'identidad de Parseval General'],
            ['section_id' => 170, 'name' => 'producto interno definido en PC[-p,p]'],
            ['section_id' => 170, 'name' => 'serie de Fourier trigonométrica'],
            ['section_id' => 170, 'name' => 'serie de Fourier compleja'],
            ['section_id' => 170, 'name' => 'extensión par (serie Cosenoidal)'],
            ['section_id' => 170, 'name' => 'extensión impar (serie Senoidal)'],
            ['section_id' => 170, 'name' => 'identidad de Parseval'],


            ['section_id' => 171, 'name' => 'cálculo de Series con serie de Fourier'],
            ['section_id' => 171, 'name' => 'cálculo de Series con identidad de Parseval'],


            /* Sector 8 - Transformada de Fourier  */


            ['section_id' => 172, 'name' => 'transformada de Fourier Senoidal'],
            ['section_id' => 172, 'name' => 'transformada de Fourier Cosenoidal'],
            ['section_id' => 172, 'name' => 'transformada de Fourier Compleja'],
            ['section_id' => 172, 'name' => 'teoremas y fórmulas de transformadas'],
            ['section_id' => 172, 'name' => 'convolución'],


            ['section_id' => 173, 'name' => 'Sol. de EDP por Transf. Fourier (ver EDP)'],


            /* Sector 8 - Distribuciones - Función Generalizada  */


            ['section_id' => 174, 'name' => 'funciones de soporte compacto'],
            ['section_id' => 174, 'name' => 'funciones que tienden rápidamente a cero'],
            ['section_id' => 174, 'name' => 'distribuciones'],


            ['section_id' => 175, 'name' => 'función Escalón Unitario (Heaviside)'],
            ['section_id' => 175, 'name' => 'función Rampa'],
            ['section_id' => 175, 'name' => 'función Impulso o delta de Dirac'],


            ['section_id' => 176, 'name' => 'Derivada Distribucional'],


            /* Sector 9 - Cuasilineales (Primer Orden)  */


            ['section_id' => 177, 'name' => 'características'],
            ['section_id' => 177, 'name' => 'superficie integral'],
            ['section_id' => 177, 'name' => 'curva condición'],


            /* Sector 9 - EDP 2º Orden (Forma Normal)  */


            ['section_id' => 178, 'name' => 'discriminante'],
            ['section_id' => 178, 'name' => 'tipo hiperbólica'],
            ['section_id' => 178, 'name' => 'tipo parabólica'],
            ['section_id' => 178, 'name' => 'tipo elíptica'],
            ['section_id' => 178, 'name' => 'cambio de variables y regla de la cadena'],
            ['section_id' => 178, 'name' => 'forma normal o canónica'],
            ['section_id' => 178, 'name' => 'sol. de D\'Alembert (ver EDP de Onda)'],


            /* Sector 9 - Coef. Constantes y Reducibles  */


            ['section_id' => 179, 'name' => 'factorización'],
            ['section_id' => 179, 'name' => 'factores con a distinto de cero'],
            ['section_id' => 179, 'name' => 'factores con a = 0'],


            ['section_id' => 180, 'name' => 'solución particular'],
            ['section_id' => 180, 'name' => 'forma exponencial para la sol. particular'],
            ['section_id' => 180, 'name' => 'desarrollo de Taylor para la sol. particular'],


            /* Sector 9 - EDP en Regiones Acotadas  */


            ['section_id' => 181, 'name' => 'condiciones de borde homogéneas'],
            ['section_id' => 181, 'name' => 'solución particular'],
            ['section_id' => 181, 'name' => 'condiciones de borde no- homogéneas'],


            /* Sector 9 - EDP en Regiones No-Acotadas  */


            ['section_id' => 182, 'name' => 'con transformada Senoidal'],
            ['section_id' => 182, 'name' => 'con transformada Cosenoidal'],
            ['section_id' => 182, 'name' => 'con transformada Compleja'],
            ['section_id' => 182, 'name' => 'transformada inversa'],


            /* Sector 9 - EDP de Onda, Calor y Laplace  */


            ['section_id' => 183, 'name' => 'regiones rectangulares (unidimensional)'],
            ['section_id' => 183, 'name' => 'regiones rectangulares (bidimensional)'],
            ['section_id' => 183, 'name' => 'regiones circulares (bidimensional)'],
            ['section_id' => 183, 'name' => 'solución de D\'Alembert'],


            ['section_id' => 184, 'name' => 'estado estacionario y transiente'],
            ['section_id' => 184, 'name' => 'regiones rectangulares (unidimensional)'],
            ['section_id' => 184, 'name' => 'regiones rectangulares (bidimensional)'],
            ['section_id' => 184, 'name' => 'regiones rectangulares (tridimensional)'],
            ['section_id' => 184, 'name' => 'regiones circulares (bidimensional)'],
            ['section_id' => 184, 'name' => 'regiones cilíndricas (tridimensional)'],
            ['section_id' => 184, 'name' => 'regiones esféricas (tridimensional)'],


            ['section_id' => 185, 'name' => 'EDP de Laplace'],


            /* Sector 10 - Complejos y Topología  */


            ['section_id' => 186, 'name' => 'suma y resta con la forma: a+bi'],
            ['section_id' => 186, 'name' => 'producto y división con la forma: a+bi'],
            ['section_id' => 186, 'name' => 'parte real y parte imaginaria'],
            ['section_id' => 186, 'name' => 'módulo y conjugado'],
            ['section_id' => 186, 'name' => 'forma polar, cis y de Euler'],
            ['section_id' => 186, 'name' => 'potencias de números complejos'],
            ['section_id' => 186, 'name' => 'raíces de números complejos'],
            ['section_id' => 186, 'name' => 'ecuaciones con complejos'],
            ['section_id' => 186, 'name' => 'inecuaciones con complejos'],
            ['section_id' => 186, 'name' => 'otros'],


            ['section_id' => 187, 'name' => 'ejerc. demostrativos de N°. Complejos'],


            ['section_id' => 188, 'name' => 'vecindad'],
            ['section_id' => 188, 'name' => 'conjuntos abiertos y cerrados'],
            ['section_id' => 188, 'name' => 'puntos fronteras e interiores'],
            ['section_id' => 188, 'name' => 'puntos de acumulación'],
            ['section_id' => 188, 'name' => 'conjuntos conexos'],
            ['section_id' => 188, 'name' => 'conjuntos acotados y compactos'],


            /* Sector 10 - Funciones y Límites  */


            ['section_id' => 189, 'name' => 'dominio y recorrido'],
            ['section_id' => 189, 'name' => 'dominio anular'],
            ['section_id' => 189, 'name' => 'transformaciones y mapeos'],
            ['section_id' => 189, 'name' => 'traslación y rotación'],
            ['section_id' => 189, 'name' => 'contracciones y dilatación'],
            ['section_id' => 189, 'name' => 'transformación conforme'],


            ['section_id' => 190, 'name' => 'función potencial'],
            ['section_id' => 190, 'name' => 'funciones multivaluadas'],
            ['section_id' => 190, 'name' => 'ramas y rama principal'],
            ['section_id' => 190, 'name' => 'puntos de ramificación'],
            ['section_id' => 190, 'name' => 'función raíz'],
            ['section_id' => 190, 'name' => 'función exponencial'],
            ['section_id' => 190, 'name' => 'funciones trigonométricas'],
            ['section_id' => 190, 'name' => 'funciones hiperbólicas'],
            ['section_id' => 190, 'name' => 'función logaritmo'],
            ['section_id' => 190, 'name' => 'funciones inversas'],
            ['section_id' => 190, 'name' => 'funciones inversas trigonométricas'],
            ['section_id' => 190, 'name' => 'funciones inversas hiperbólicas'],


            ['section_id' => 191, 'name' => 'definición de límite'],
            ['section_id' => 191, 'name' => 'límites de funciones típicas'],


            ['section_id' => 192, 'name' => 'tipos de discontinuidad'],
            ['section_id' => 192, 'name' => 'discontinuidad reparable'],
            ['section_id' => 192, 'name' => 'discontinuidad irremediable'],
            ['section_id' => 192, 'name' => 'discontinuidad removible'],


            /* Sector 10 - Derivadas, Series e Integral  */


            ['section_id' => 193, 'name' => 'definición'],
            ['section_id' => 193, 'name' => 'condiciones de Cauchy-Riemann'],
            ['section_id' => 193, 'name' => 'Cauchy-Riemann en forma polar'],
            ['section_id' => 193, 'name' => 'funciones analíticas, enteras'],
            ['section_id' => 193, 'name' => 'funciones holomorfas, meromorfas'],
            ['section_id' => 193, 'name' => 'teo. módulo mínimo'],
            ['section_id' => 193, 'name' => 'teo. módulo máximo'],
            ['section_id' => 193, 'name' => 'continuación analítica'],


            ['section_id' => 194, 'name' => 'ceros de una función'],
            ['section_id' => 194, 'name' => 'polos de una función'],
            ['section_id' => 194, 'name' => 'residuos de una función'],
            ['section_id' => 194, 'name' => 'singularidad reparable'],
            ['section_id' => 194, 'name' => 'singularidad esencial'],


            ['section_id' => 195, 'name' => 'parte principal'],
            ['section_id' => 195, 'name' => 'parte analítica'],
            ['section_id' => 195, 'name' => 'series de Taylor'],
            ['section_id' => 195, 'name' => 'series de Laurant'],
            ['section_id' => 195, 'name' => 'resto'],
            ['section_id' => 195, 'name' => 'convergencia en discos y discos anulares'],
            ['section_id' => 195, 'name' => 'singularidades en el infinito'],


            ['section_id' => 196, 'name' => 'integrales por caminos o curvas'],
            ['section_id' => 196, 'name' => 'teorema integral de Cauchy'],
            ['section_id' => 196, 'name' => 'teorema de Morera y Goursat'],
            ['section_id' => 196, 'name' => 'teorema de los residuos'],
            ['section_id' => 196, 'name' => 'integrales usando series de Laurant'],


            ['section_id' => 197, 'name' => 'integrales de -infinito a +infinito'],
            ['section_id' => 197, 'name' => 'integrales de 0 a 2pi'],
            ['section_id' => 197, 'name' => 'otras'],




        ];

        foreach ($items as $itemData) {
            $item = new Item($itemData);
            $item->save();
        }
    }
}
