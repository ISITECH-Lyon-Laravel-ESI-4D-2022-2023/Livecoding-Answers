<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'due_date',
        'priority'
    ];

    protected $casts = [
        'due_date' => 'datetime'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
