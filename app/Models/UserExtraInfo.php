<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExtraInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'user_id',
        'phone_number',
        'institutional_details',
        'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

