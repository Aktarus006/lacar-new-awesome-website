<?php

namespace App\Models;

use App\Models\Kit;
use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    public function formats()
    {
        return $this->belongsTo(Kit::class);
    }
}
