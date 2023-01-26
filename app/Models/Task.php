<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_done'
    ];

    protected $casts = [
        'is_done' => 'boolean'
    ];

    public function todoList()
    {
        return $this->belongsTo(TodoList::class);
    }
}
