<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLinks extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'experience_id',
        'education_id',
        'courses_id',
        'internship_id',
        'programming_id',
        'softskills_id',
        'project_id',
    ];

    protected $table = "user_links";

    public function education()
    {
        return $this->belongsTo(Education::class, 'education_id');
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class, 'experience_id');
    }

    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }

    public function internship()
    {
        return $this->belongsTo(Internship::class, 'internship_id');
    }

    public function programming()
    {
        return $this->belongsTo(Programming::class, 'programming_id');
    }

    public function softSkills()
    {
        return $this->belongsTo(SoftSkills::class, 'softskills_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
