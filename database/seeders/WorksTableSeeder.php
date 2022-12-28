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
            ['name' => 'Графика', 'icon' => 'icon-images2'],
            ['name' => 'Айдентика', 'icon' => 'icon-trophy4'],
            ['name' => 'Дизайн', 'icon' => 'icon-brush'],
        ];

        $dataWorks = ['graphics', 'logos','design'];

        foreach ($dataDirections as $k => $item) {
            $direction = Direction::create($item);
            $localPath = $dataWorks[$k].'/';
            $countImages = count(glob(base_path('public/images/portfolio/'.$localPath.'*')))/2;
            for ($i=0;$i<$countImages;$i++) {
                Work::create([
//                    'name' => 'Work #'.($i+1),
//                    'description' => 'Ut metus dui, feugiat a erat vel, tincidunt maximus nibh.',
                    'preview' => $localPath.'image'.($i+1).'_preview.jpg',
                    'full' => $localPath.'image'.($i+1).'_full.jpg',
                    'direction_id' => $direction->id
                ]);
            }
        }
    }
}
