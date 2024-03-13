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
            'name' => 'Home',
            'href' => 'home',
            'public' => '1',
        ]);

        Section::create([
            'name' => 'About',
            'href' => 'about',
            'public' => '1',
        ]);

        Section::create([
            'name' => 'Portfolio',
            'href' => 'portfolio',
            'public' => '0',
        ]);

        Section::create([
            'name' => 'Testmonial',
            'href' => 'testmonial',
            'public' => '0',
        ]);

        Section::create([
            'name' => 'Blog',
            'href' => 'blog',
            'public' => '0',
        ]);

        Section::create([
            'name' => 'Contact',
            'href' => 'contact',
            'public' => '1',
        ]);

    }
}
