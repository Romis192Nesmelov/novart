<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Direction;
use App\Models\Work;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataDirections = [
            ['name' => 'Граф. дизайн', 'icon' => 'icon-bulb'],
            ['name' => 'Веб дизайн', 'icon' => 'icon-globe-outline'],
            ['name' => 'Сайты', 'icon' => 'icon-data'],
            ['name' => 'UI/UX дизайн', 'icon' => 'icon-phone3'],
        ];

        foreach ($dataDirections as $item) {
            $direction = Direction::create($item);
            for ($i=0;$i<6;$i++) {
                Work::create([
                    'name' => 'Work #'.($i+1),
                    'description' => 'Ut metus dui, feugiat a erat vel, tincidunt maximus nibh.',
                    'preview' => 'img-'.($i+1).'.jpg',
                    'full' => 'img-'.($i+1).'.jpg',
                    'direction_id' => $direction->id
                ]);
            }
        }
    }
}
