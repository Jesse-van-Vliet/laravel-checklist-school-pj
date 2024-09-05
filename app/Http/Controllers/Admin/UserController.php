<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Task;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.#
     * @param User $user
     * @return View
     */
    public function show(User $user): View
    {
        $tasks = Task::with('user', 'label')->where('user_id', $user->id)->get();
        return view('admin.users.show', ['user' => $user, 'tasks' => $tasks]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $users = User::all();
        return view('admin.users.edit', ['user' => $user, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if(!empty($request->password) && !empty($request->password2))
        {
            if($request->password == $request->password2){
                $user->password  = bcrypt($request->password);
            }
            else{

                return redirect()->route('users.index');
                exit();


            }
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('users.index');

    }


    /**
     * Remove the specified resource from storage.
     * @param User $user
     * @return View
     */
    public function delete(User $user):View
    {
        return view('admin.users.delete', ['user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('status', "User $user->name deleted successfully");

    }

}
