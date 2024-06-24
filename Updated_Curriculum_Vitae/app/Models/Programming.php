<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programming extends Model
{
    use HasFactory;

    protected $fillable = [
        'languageName',
        'experienceLevel',
        'smallExplanation1',
        'smallExplanation2',
        'smallExplanation3',
        'smallExplanation4',
        'smallExplanation5',
        'startedWith',
        'workedWithUntil'
    ];

    protected $table = "programming";
}
