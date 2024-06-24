<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'educatorName',
        'courseName',
        'smallExplanation1',
        'smallExplanation2',
        'smallExplanation3',
        'smallExplanation4',
        'smallExplanation5',
        'validityEarned',
        'validUntil',
        'certificationLocation'
    ];

    protected $table = "courses";
}
