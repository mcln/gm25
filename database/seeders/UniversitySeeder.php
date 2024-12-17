<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\University;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $universities = [
            ['country_id' => 41, 'name' => 'Universidad Técnica Federico Santa María'],
            ['country_id' => 41, 'name' => 'Pontificia Universidad Catolica de Valparaíso'],
            ['country_id' => 41, 'name' => 'Universidad Adolfo Ibañez'],
        ];

        foreach ($universities as $universityData) {
            University::create($universityData);
        }
    }
}
