<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            '#FF3838' => 'red',
            '#0AAAF4' => 'blue',
            '#891BE8' => 'purple',
            '#1AD698' => 'green',
            '#F8BD1C' => 'yellow',
            '#4339F2' => 'indigo',
        ];
        
        foreach ($colors as $color => $name) {
            Label::create([
                'title' => $name,
                'color' => $color,
            ]);
        }
    }
}
