<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payout extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'status',
        'requested_at',
        'processed_at',
    ];

    // Nilai yang valid untuk status
    public static $statuses = ['requested', 'paid', 'rejected'];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Scope untuk status
    public function scopeRequested($query)
    {
        return $query->where('status', 'requested');
    }

    public function scopePaid($query)
    {
        return $query->where('status', 'paid');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }
}
