<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyDeposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'hostel_id',
        'user_id',
        'date',
        'amount'
    ];

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
