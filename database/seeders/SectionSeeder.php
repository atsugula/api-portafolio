<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'name' => 'home',
            'public' => '1',
        ]);

        Section::create([
            'name' => 'about',
            'public' => '1',
        ]);

        Section::create([
            'name' => 'portfolio',
            'public' => '0',
        ]);

        Section::create([
            'name' => 'testmonial',
            'public' => '0',
        ]);

        Section::create([
            'name' => 'blog',
            'public' => '0',
        ]);

        Section::create([
            'name' => 'contact',
            'public' => '1',
        ]);

    }
}
