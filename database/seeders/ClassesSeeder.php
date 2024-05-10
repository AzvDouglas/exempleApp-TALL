<?php

namespace Database\Seeders;

use App\Models\Classe;
use App\Models\Section;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classe::factory()
            ->count(10)
            ->sequence(fn($sequence) => ['name' => 'Classe ' . $sequence->index + 1])
            ->has(
                Section::factory()
                    ->count(2)
                    ->state(
                        new Sequence(
                            ['name' => 'Section A'],
                            ['name' => 'Section B'],
                        )
                    )
                    ->has(
                        Student::factory()
                        ->count(5)
                        ->state(
                            function (array $attributes, Section $section) {
                                return ['classe_id' => $section->classe->id];
                            }
                        )
                    )
            )
            ->create();
    }
}