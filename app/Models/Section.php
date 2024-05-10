<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    public $fillable = ['name'];

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'section_id');
    }
}
