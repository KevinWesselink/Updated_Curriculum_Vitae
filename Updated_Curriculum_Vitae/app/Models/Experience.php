<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['companyName', 'jobTitle', 'smallExplanation1', 'smallExplanation2', 'smallExplanation3', 'smallExplanation4', 'smallExplanation5', 'yearsWorked', 'companyLocation'];

    protected $table = "experience";
}
