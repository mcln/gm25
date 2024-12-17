<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Semester;

class SemestersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $semesters = [
            /* ['period' => 'Primer Semestre', 'year' => 2010],
            ['period' => 'Segundo Semestre', 'year' => 2010],
            ['period' => 'Primer Semestre', 'year' => 2011],
            ['period' => 'Segundo Semestre', 'year' => 2011],
            ['period' => 'Primer Semestre', 'year' => 2012],
            ['period' => 'Segundo Semestre', 'year' => 2012],
            ['period' => 'Primer Semestre', 'year' => 2013],
            ['period' => 'Segundo Semestre', 'year' => 2013],
            ['period' => 'Primer Semestre', 'year' => 2014],
            ['period' => 'Segundo Semestre', 'year' => 2014],
            ['period' => 'Primer Semestre', 'year' => 2015],
            ['period' => 'Segundo Semestre', 'year' => 2015],
            ['period' => 'Primer Semestre', 'year' => 2016],
            ['period' => 'Segundo Semestre', 'year' => 2016],
            ['period' => 'Primer Semestre', 'year' => 2017],
            ['period' => 'Segundo Semestre', 'year' => 2017],
            ['period' => 'Primer Semestre', 'year' => 2018],
            ['period' => 'Segundo Semestre', 'year' => 2018],
            ['period' => 'Primer Semestre', 'year' => 2019],
            ['period' => 'Segundo Semestre', 'year' => 2019],
            ['period' => 'Primer Semestre', 'year' => 2020],
            ['period' => 'Segundo Semestre', 'year' => 2020],
            ['period' => 'Primer Semestre', 'year' => 2021],
            ['period' => 'Segundo Semestre', 'year' => 2021],
            ['period' => 'Primer Semestre', 'year' => 2022],
            ['period' => 'Segundo Semestre', 'year' => 2022],
            ['period' => 'Primer Semestre', 'year' => 2023],
            ['period' => 'Segundo Semestre', 'year' => 2023],
            ['period' => 'Primer Semestre', 'year' => 2024],
            ['period' => 'Segundo Semestre', 'year' => 2024], */

            ['period' => 'Primer Semestre', 'year' => 2009],
            ['period' => 'Segundo Semestre', 'year' => 2009],
            ['period' => 'Primer Semestre', 'year' => 2008],
            ['period' => 'Segundo Semestre', 'year' => 2008],
            ['period' => 'Primer Semestre', 'year' => 2007],
            ['period' => 'Segundo Semestre', 'year' => 2007],
            ['period' => 'Primer Semestre', 'year' => 2006],
            ['period' => 'Segundo Semestre', 'year' => 2006],
            ['period' => 'Primer Semestre', 'year' => 2005],
            ['period' => 'Segundo Semestre', 'year' => 2005],
            
        ];

        foreach ($semesters as $semesterData) {
            Semester::create($semesterData);
        }
    }
}
