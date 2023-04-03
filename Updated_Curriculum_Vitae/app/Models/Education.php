<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = ['schoolName', 'educationName', 'smallExplanation1', 'smallExplanation2', 'smallExplanation3', 'smallExplanation4', 'smallExplanation5', 'yearsFollowed', 'status', 'schoolLocation'];

    protected $table = "education";
}
