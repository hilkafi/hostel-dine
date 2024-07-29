<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'hostel_id',
        'name',
        'description'
    ];

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}