<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    use HasFactory;


    public function notes()
    {
        return $this->hasMany(notes::class);
    }

    public function students()
    {
        return $this->belongsTo(students::class);
    }
   
}
