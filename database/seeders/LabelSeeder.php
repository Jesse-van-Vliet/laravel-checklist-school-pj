<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Label;
class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $label1= Label::factory()->create([
            'name' => 'to-do'
        ]);

        $label2= Label::factory()->create([
            'name' => 'doing'
        ]);

        $label3= Label::factory()->create([
            'name' => 'done'
        ]);

    }
}
