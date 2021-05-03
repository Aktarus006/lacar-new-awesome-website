<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
