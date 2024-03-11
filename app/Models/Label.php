<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'color',
        'board_id'
    ];

    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    public function taskLables()
    {
        return $this->hasMany(TaskLable::class);
    }
    
    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'task_lables');
    }
}
