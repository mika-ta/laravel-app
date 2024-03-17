<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lessons = [
            [
                'lesson_title' => '初心者向けピアノレッスン',
                'is_payment' => true,
            ],
            [
                'lesson_title' => '中級者向けギターレッスン',
                'is_payment' => false,
            ]
        ];

        foreach ($lessons as $lesson) {
            DB::table('lessons')->insert([
                'lesson_title' => $lesson['lesson_title'],
                'is_payment' => $lesson['is_payment'],
            ]);
        }
    }
}
