<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Task extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'tasks';
    protected $fillable = [
        'list_id',
        'title',
        'description',
        'completed',
    ];

    public function list()
    {
        return $this->belongsTo(TodoList::class, 'list_id');
    }
}
