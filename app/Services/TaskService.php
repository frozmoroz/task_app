<?php


namespace App\Services;


use App\Models\Task;

class TaskService
{
    public function getTasks()
    {
        return Task::with(['author', 'executor', 'status'])->get();
    }

    public function createTask()
    {
        return Task::all();
    }
}
