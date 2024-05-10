<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function classe ()
    {
        return $this->belongsTo(Classe::class, 'classe_id');
    }

    public function section ()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}
