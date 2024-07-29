<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'hostel_id',
        'type',
        'timeslot',
        'amount'
    ];

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }

    public function logs()
    {
        return $this->hasMany(MealRateLog::class);
    }
}
