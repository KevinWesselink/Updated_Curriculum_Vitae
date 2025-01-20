<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileAccessRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_owner_id',
        'user_id',
        'status',
    ];

    public function requester()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
