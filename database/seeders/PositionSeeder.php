<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            [
               'pos_name' => 'Kapitan',
               'pos_designation' => 'Bosongon Leader',
               'pos_enddate' => '2026-05-15',
            ],
            [
                'pos_name' => 'Upper Lagayac Kagawad',
                'pos_designation' => 'Purok 1',
                'pos_enddate' => '2026-05-15',
            ],
            [
                'pos_name' => 'Lower Lagayac Kagawad',
                'pos_designation' => 'Purok 2',
                'pos_enddate' => '2026-05-15',
            ],
            [
                'pos_name' => 'Salvacion Kagawad',
                'pos_designation' => 'Purok 3',
                'pos_enddate' => '2026-05-15',
            ],
            [
                'pos_name' => 'Cansuran Kagawad',
                'pos_designation' => 'Purok 4',
                'pos_enddate' => '2026-05-15',
            ],
            [
                'pos_name' => 'Centro Kagawad',
                'pos_designation' => 'Purok 5',
                'pos_enddate' => '2026-05-15',
            ],
            [
                'pos_name' => 'Campinoon Kagawad',
                'pos_designation' => 'Purok 10',
                'pos_enddate' => '2026-05-15',
            ],
            [
                'pos_name' => 'Tanod',
                'pos_designation' => 'To designated Area',
                'pos_enddate' => '2026-05-15',
            ],
            [
                'pos_name' => 'Personel',
                'pos_designation' => 'To designated Area',
                'pos_enddate' => '2026-05-15',
            ],
        ];

        foreach ($positions as $position) {
            Position::create($position);
        }

    }
}
