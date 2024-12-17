<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            ['university_id' => 1, 'name' => 'MAT021'],
            ['university_id' => 1, 'name' => 'MAT022'],
            ['university_id' => 1, 'name' => 'MAT023'],
            ['university_id' => 1, 'name' => 'MAT024'],
        ];

        foreach ($subjects as $subjectData) {
            Subject::create($subjectData);
        }
    }
}
