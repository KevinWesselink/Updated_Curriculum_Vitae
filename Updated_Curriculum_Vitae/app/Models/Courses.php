<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = ['educatorName', 'courseName', 'smallExplanation1', 'smallExplanation2', 'smallExplanation3', 'smallExplanation4', 'smallExplanation5', 'validityEarned', 'validUntil', 'certificationLocation'];

    protected $table = "courses";

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('educatorName', 'like', '%' . request('search') . '%')
            ->orWhere('courseName', 'like', '%' . request('search') . '%')
            ->orWhere('smallExplanation1', 'like', '%' . request('search') . '%')
            ->orWhere('smallExplanation2', 'like', '%' . request('search') . '%')
            ->orWhere('smallExplanation3', 'like', '%' . request('search') . '%')
            ->orWhere('smallExplanation4', 'like', '%' . request('search') . '%')
            ->orWhere('smallExplanation5', 'like', '%' . request('search') . '%')
            ->orWhere('validityEarned', 'like', '%' . request('search') . '%')
            ->orWhere('validUntil', 'like', '%'. request('search') . '%')
            ->orWhere('certificationLocation', 'like', '%'. request('search') . '%');
        }
    }
}
