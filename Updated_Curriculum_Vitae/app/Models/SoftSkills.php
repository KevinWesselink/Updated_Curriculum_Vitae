<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftSkills extends Model
{
    use HasFactory;

    protected $fillable = [
        'skillName',
        'experienceLevel', 
        'smallExplanation1',
        'smallExplanation2',
        'smallExplanation3',
        'smallExplanation4',
        'smallExplanation5',
        'startedWith',
        'workedWithUntil'
    ];

    protected $table = "softskills";
}
