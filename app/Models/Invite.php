<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'hostel_id',
        'email',
        'role_id',
        'status'
    ];

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }
}
