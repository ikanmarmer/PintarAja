<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'title',
        'content',
        'type',
        'resource_url',
        'position',
    ];

    // Nilai yang valid untuk type
    public static $types = ['video', 'text', 'pdf', 'audio', 'image'];

    // Relationships
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function quizzes()
    {
        return $this->hasOne(Quiz::class);
    }

    public function assignments()
    {
        return $this->hasOne(Assignment::class);
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }
}
