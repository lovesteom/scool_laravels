<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    public function classroom()
    {
        return $this->belongsTo(classroom::class);
    }

    public function materials()
{
    return $this->hasMany(materials::class);
}    
}
