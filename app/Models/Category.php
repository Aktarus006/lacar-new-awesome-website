<?php

namespace App\Models;

use App\Models\Kit;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function kits()
    {
        return $this->belongsToMany(Kit::class);
    }
}
