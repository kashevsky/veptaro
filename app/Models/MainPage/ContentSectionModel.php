<?php

namespace App\Models\MainPage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentSectionModel extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'main_content_section_models';
}
