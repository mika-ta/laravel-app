<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $participants = [
            [
                'number_of_lessons_id' => 1,
                'name' => '参加者 太郎',
                'address' => '東京都新宿区',
                'phone_number' => '09012345678',
                'mail_address' => 'taro@example.com',
                'memo' => 'アレルギーあり',
            ],
            [
                'number_of_lessons_id' => 1,
                'name' => '参加者 太郎2',
                'address' => '東京都新宿区',
                'phone_number' => '09012345678',
                'mail_address' => 'taro@example.com',
                'memo' => 'アレルギーあり',
            ],
        ];

        foreach ($participants as $participant) {
            DB::table('participants')->insert([
                'number_of_lessons_id' => $participant['number_of_lessons_id'],
                'name' => $participant['name'],
                'address' => $participant['address'],
                'phone_number' => $participant['phone_number'],
                'mail_address' => $participant['mail_address'],
                'memo' => $participant['memo'],
            ]);
        }
    }
}
