<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Majors extends Model
{
    use HasFactory;

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    // Pastikan kolom 'name' ada di fillable
    protected $fillable = [
        'name',
        'code',
        'description', // tambahkan kolom lain yang ingin diisi
    ];
}
