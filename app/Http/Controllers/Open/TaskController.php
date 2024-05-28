<?php

namespace App\Http\Controllers\Open;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Task;
use App\Models\User;
use App\Models\Label;


class TaskController extends Controller
{
    /**
     * @return View
     */

    public function index(): View
    {
        $tasks = Task::with('user', 'label')->where('user_id', '3')
            ->paginate(15);
        return view('open.tasks.index', ['tasks' => $tasks]);
    }


}
