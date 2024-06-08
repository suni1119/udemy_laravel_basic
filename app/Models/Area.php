<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function shops()
    {
        return $this->hasMany(Shop::class); // "親" App/Models/Shopと同じ意味になる
    }
}
