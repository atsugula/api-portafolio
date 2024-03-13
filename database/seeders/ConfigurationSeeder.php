<?php

namespace Database\Seeders;

use App\Models\Configuration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'brand' => 'Jorge Usuga',
            'linkedin' => 'https://www.linkedin.com/in/jusuga/',
            'github' => 'https://github.com/atsugula',
        ]);
    }
}
