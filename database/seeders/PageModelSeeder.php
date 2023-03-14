<?php

namespace Database\Seeders;

use App\Models\PageModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageModel::create([
            'content'=>'В современной психологии – расстановки стали неотъемлемым атрибутом многих высококвалифицированных специалистов, так как с их помощью намного сокращается время терапии. И, что самое невероятное, закрывается негативная программа не только для клиента, но и для его близкого окружения. Расстановки по Берту Хелленгеру затрагивают психоэмоциональное пространство человека. Решения проблемы приходит к человеку интуитивно, спонтанно. Это похоже на магию. Ситуации, проигранные в расстановках, через некоторое время воплощаются в жизнь. Данный метод приобрёл бешенную поппулярность.',
        ]);
        PageModel::create([
            'content'=>'Таро всегда притягивало своей загадочностью и тем, насколько правдиво оно способно отвечать на вопросы. Вам интересно научиться работать с картами, понимать их знаки, но Вы все еще сомневаетесь стоит ли браться за Таро?Получится ли у Вас? Или Вы уже практикуете, но чувствуете, что чего-то не хватает, что-то ускользает от Вас?',
        ]);
        PageModel::create([
            'content'=>'Восковая отливка служила щитом и отражала от человека недуги, начиная с древних времён. Тогда целители работали на основе принципа, что болезнь недостаточно лечить в физическом теле, ведь любое заболевание начинается на энергетике человека. Бабушки-знахарки, ведуньи чувствовали Природу и знали её законы. Они понимали необходимость обращения к высшим Силам, знали заговоры, молитвы, отчитки.',
        ]);
    }
}
