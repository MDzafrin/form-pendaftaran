<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'gender',
        'prodi',
        'tingkat',
        'email',
        'phone',
        'lomba',
        'image',
    ];
    
}

