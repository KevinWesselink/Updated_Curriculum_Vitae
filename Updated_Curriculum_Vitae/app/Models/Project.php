<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'projectName',
        'projectDescription',
        'projectLink',
        'projectImage',
        'projectStartDate',
        'projectEndDate',
        'projectRole',
        'projectType',
        'projectTechnologies',
        'projectTeamSize',
        'projectClient',
        'projectLocation',
        'projectStatus',
    ];
}
