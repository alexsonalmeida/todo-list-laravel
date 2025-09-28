<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class TodoList extends Model {
    use HasFactory, HasUuids;

    protected $table = 'lists';
    protected $fillable = [
        'title',
    ];

    public function tasks() {
        return $this->hasMany(Task::class, 'list_id'); 
    }
}
