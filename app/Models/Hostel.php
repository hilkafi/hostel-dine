<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'owner_id',
        'name',
        'slug',
        'description',
        'email',
        'phone_number',
        'address'
    ];

    public function waitings()
    {
        return $this->hasMany(Waiting::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
