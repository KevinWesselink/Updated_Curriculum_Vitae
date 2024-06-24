<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    protected $fillable = [
        'companyName', 
        'companyLocation', 
        'functionName', 
        'smallExplanation1', 
        'smallExplanation2', 
        'smallExplanation3', 
        'smallExplanation4', 
        'smallExplanation5', 
        'internshipStartedAt', 
        'internshipEndedAt', 
        'finalAssessment'
    ];

    protected $table = "internships";
}
