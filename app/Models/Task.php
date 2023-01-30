<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'done'
    ];

    protected $casts = [
        'done' => 'boolean'
    ];

    public function todoList()
    {
        return $this->belongsTo(TodoList::class);
    }
}
