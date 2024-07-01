<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $table = 'questions';
    
    static $rules = [
    ];

    protected $fillable = [
        'id',
        'question',
        'rightAnswer',
        'wrongAnswer1',
        'wrongAnswer2',
        'wrongAnswer3'
    ];
}
