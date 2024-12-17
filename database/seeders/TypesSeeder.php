<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Certámenes'],
            ['name' => 'Controles'],
            ['name' => 'Guías'],
            ['name' => 'Talleres'],
            ['name' => 'Ayudantías'],
        ];

        foreach ($types as $typeData) {
            Type::create($typeData);
        }
    }
}
