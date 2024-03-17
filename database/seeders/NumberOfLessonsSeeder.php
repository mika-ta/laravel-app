<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumberOfLessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lessons = [
            [
                'class_id' => 1,
                'participants_id' => 1,
                'lesson_title' => '初級レッスン',
                'is_payment' => true,
            ],
            [
                'class_id' => 1,
                'participants_id' => 2,
                'lesson_title' => '初級レッスン',
                'is_payment' => true,
            ],
        ];

        foreach ($lessons as $lesson) {
            DB::table('number_of_lessons')->insert([
                'class_id' => $lesson['class_id'],
                'participants_id' => $lesson['participants_id'],
                'lesson_title' => $lesson['lesson_title'],
                'is_payment' => $lesson['is_payment'],
            ]);
        }
    }
}
