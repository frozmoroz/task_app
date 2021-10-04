<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => "datetime:d.m.Y",
    ];

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function executor() {
        return $this->belongsTo(User::class, 'executor_id');
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }
}
