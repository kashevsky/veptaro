<?php

namespace App\Models;

use App\Models\ConsultationSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConsultationContent extends Model
{
    use HasFactory;
    public function sections()
    {
        return $this->hasMany(ConsultationSection::class, 'page_id','id');
    }
}
