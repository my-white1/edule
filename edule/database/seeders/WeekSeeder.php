<?php

namespace Database\Seeders;

use App\Models\Week;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Week::insert([
            [
                'title' => 'Dushanba',
            ],
            [
                'title' => 'Seshanba',
            ],
            [
                'title' => 'Chorshanba',
            ],
            [
                'title' => 'Payshanba',
            ],
            [
                'title' => 'Jumo',
            ],
            [
                'title' => 'Shanba',
            ],
            [
                'title' => 'Yakshanba',
            ],

        ]);
    }
}
