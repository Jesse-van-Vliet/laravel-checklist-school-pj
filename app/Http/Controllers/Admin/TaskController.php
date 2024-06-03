<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Models\Task;
use illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Label;
use App\Models\User;




class TaskController extends Controller
{
    /**
     * set permissions on methods
     *
     */

    public function __construct() {
        $this->middleware('permission:index task', ['only' => ['index']]);
        $this->middleware('permission:show task', ['only' => ['show']]);
        $this->middleware('permission:create task', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit task', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete task', ['only' => ['delete', 'destroy']]);


    }

    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $tasks = Task::with('user', 'label')->where('user_id', @auth()->user()->id)->get();
        return view('admin.tasks.index', ['tasks' => $tasks]);

    }

    /**
     * Show the form for creating a new resource.
     * @return view
     */
    public function create(): View
    {
        $tasks = Task::all();
        $labels = Label::all();
        $users = User::all();
        return view('admin.tasks.create', ['tasks' => $tasks, 'labels' => $labels, 'users' => $users]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStoreRequest $request)
    {
        $tasks = new Task();
        $tasks->name = $request->name;
        $tasks->description = $request->description;
        $tasks->user_id = $request->user_id;
        $tasks->label_id = $request->label_id;
        $tasks->save();
        return to_route('tasks.index')->with('status', "Task $tasks created successfully");
    }

    /**
     * Display the specified resource.
     * @param Task $task
     * @return view
     */

    public function show(Task $task):view
    {
        return view('admin.tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $tasks= Task::all();
        $labels = Label::all();
        $users = User::all();
        return view('admin.tasks.edit', ['task' => $task, 'labels' => $labels, 'users' => $users]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskUpdateRequest $request, Task $task)
    {
        $task->name = $request->name;
        $task->description = $request->description;
        $task->user_id = $request->user_id;
        $task->label_id = $request->label_id;
        $task->save();
        return to_route('tasks.index')->with('status', "Task $task updated successfully");
    }

    /**
     * show  the specified resource from storage.
     * @param Task $task
     * @return view
     */
    public function delete(Task $task): view
    {
        $tasks= Task::all();
        $labels = Label::all();
        $users = User::all();
        return view('admin.tasks.delete', ['task' => $task, 'labels' => $labels, 'users' => $users]);
    }


    /**
     * Remove the specified resource from storage.
     * @param Task $task
     * @return RedirectResponse
     */
    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();
        return to_route('tasks.index')->with('status', "Task $task->name deleted successfully");
    }

}
