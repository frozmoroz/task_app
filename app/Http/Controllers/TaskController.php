<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * @var TaskService
     */
    private $taskService;

    public function __construct()
    {
        $this->taskService = new TaskService();
    }

    public function index()
    {
        return response()->json(
            $this->taskService->getTasks()
        );
    }

    public function create()
    {
        $this->taskService->createTask();
    }
}
