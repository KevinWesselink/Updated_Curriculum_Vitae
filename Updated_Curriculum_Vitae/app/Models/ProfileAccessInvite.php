<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileAccessInvite extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_owner_id',
        'invited_user_id',
        'status',
    ];
}
