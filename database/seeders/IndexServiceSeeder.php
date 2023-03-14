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
                'h3'=>'Консультация таролога',
                'image'=>'/images/4.1.jpg',
                'link'=>'consultacii_tarologa',

            ]
        );
        IndexService::create(
            [
                'h3'=>'Расстановки на Таро',
                'image'=>'/images/4.2.jpg',
                'link'=>'rasstanovki_na_taro',
                'page_id'=>1

            ]
        );
        IndexService::create(
            [
                'h3'=>'Обучение Таро',
                'image'=>'/images/4.3.jpg',
                'link'=>'obuchenie_taro',
                'page_id'=>2

            ]
        );
        IndexService::create(
            [
                'h3'=>'Отливки, отжиг',
                'image'=>'/images/4.4.jpg',
                'link'=>'otlivki',
                'page_id'=>3

            ]
        );
    }
}
