<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'hostel_id',
        'head_id',
        'date',
        'description',
        'amount'
    ];

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }


    public function head()
    {
        return $this->belongsTo(Head::class);
    }
}