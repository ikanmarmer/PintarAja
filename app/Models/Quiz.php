<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_id',
        'question',
        'options',
        'answer',
    ];

    protected $casts = [
        'options' => 'array',
    ];

    // Relationships
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
