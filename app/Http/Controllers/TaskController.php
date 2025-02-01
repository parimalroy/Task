<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('task-home');
    }
    public function task_store(Request $request)
    {
        echo $request->name;
        $task = Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        return redirect()->route('task.show');
    }

    public function task_show()
    {
        $tasks = Task::all();
        return view('task-show', ['tasks' => $tasks]);
    }

    public function task_edit($id)
    {
        $tasks = Task::find($id);

        return view('task-edit', ['tasks' => $tasks]);
    }
    public function task_update(Request $request)
    {
        Task::where('id', $request->id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);

        return redirect()->route('task.show');
    }

    public function task_delete(Request $request)
    {
        Task::where('id', $request->id)->delete();
        return redirect()->route('task.show');
    }
}