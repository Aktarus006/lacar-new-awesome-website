<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Format;
use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_kit');
    }

    public function formats()
    {
        return $this->hasMany(Format::class);
    }
}
