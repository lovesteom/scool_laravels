<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Notes extends Model
{
    public function materials()
    {
        return $this->belongsTo(materials::class);
    }
    use HasFactory;
}
