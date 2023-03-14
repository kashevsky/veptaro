<?php

namespace Database\Seeders;

use App\Models\IndexService;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndexServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IndexService::create(
            [
                'h3'=>'Консультации таролога',
                'image'=>'images/4.1.jpg',
                'link'=>'consultacii_tarologa',
            ]
        );
        IndexService::create(
            [
                'h3'=>'Расстановки на Таро',
                'image'=>'/images/4.2.jpg',
                'link'=>'/rasstanovki_na_taro',
            ]
        );
        IndexService::create(
            [
                'h3'=>'Обучение Таро',
                'image'=>'/images/4.3.jpg',
                'link'=>'/obuchenie_taro',
            ]
        );
        IndexService::create(
            [
                'h3'=>'Отливки, отжиг',
                'image'=>'/images/4.4.jpg',
                'link'=>'/otlivki',
            ]
        );
    }
}
