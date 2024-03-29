<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PageModelSeeder;
use Database\Seeders\ConsultationContentSeeder;
use Database\Seeders\ConsultationSectionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PageModelSeeder::class);
        $this->call(IndexServiceSeeder::class);
        $this->call(IndexSectionSeeder::class);
        $this->call(ConsultationContentSeeder::class);
        $this->call(ConsultationSectionSeeder::class);
    }
}
