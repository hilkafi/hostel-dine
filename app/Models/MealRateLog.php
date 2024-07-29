<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealRateLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'hostel_id',
        'meal_rate_id',
        'from_amount',
        'to_amount',
        'user_id'
    ];

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }

    public function mealRate()
    {
        return $this->belongsTo(MealRate::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
