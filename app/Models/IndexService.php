<?php

namespace App\Models;

use App\Models\PageModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IndexService extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function page()
    {
        return $this->hasOne(PageModel::class,'id','page_id');
    }
}
