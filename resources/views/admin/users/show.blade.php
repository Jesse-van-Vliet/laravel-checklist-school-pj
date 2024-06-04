@extends('layouts.layoutadmin')

@section('content')
    @can('show user')

    <main class="w-full flex-grow p-6">
        <h2 class="text-5xl mb-10  text-center">User infromation from: {{$user->name}}</h2>
        <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm">
            <dl class="-my-3 divide-y divide-gray-100 text-sm">

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">id</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{$user->id}}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Name</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{$user->name}}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">email</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{$user->email}}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Role</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{$user->getRoleNames()}}</dd>
                </div>


            </dl>
        </div>



        <h3 class="text-5xl mt-14  text-center">Tasks from {{$user->name}}</h3>
        <div class="w-full mt-12">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> To do tasks
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">status:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">user:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">description:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">details:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">edit:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">delete:</th>

                    </tr>
                    </thead>
                    <tbody class="text-gray-700">
                    @foreach($tasks as $task )
                        @if($task->label->id == '1')
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">{{$task->name}}</td>
                                <td class="w-1/3 text-left py-3 px-4">{{$task->label->name}}</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">{{$task->user->name}}</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href=""> {{$task->description}}</a></td>
                                @can('show task')
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('tasks.show', ['task' => $task->id]) }}"> details</a></td>
                                @endcan
                                @can('edit task')
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('tasks.edit', ['task' => $task->id]) }}"> edit</a></td>
                                @endcan
                                @can('delete task')
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('tasks.delete', ['task' => $task->id]) }}"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24">
                                                <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                            </svg> </a></td>
                                @endcan
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <div class="w-full mt-12">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> doing tasks
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">status:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">user:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">description:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">details:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">edit:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">delete:</th>

                    </tr>
                    </thead>
                    <tbody class="text-gray-700">
                    @foreach($tasks as $task )
                        @if($task->label->id == '2')
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">{{$task->name}}</td>
                                <td class="w-1/3 text-left py-3 px-4">{{$task->label->name}}</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">{{$task->user->name}}</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href=""> {{$task->description}}</a></td>
                                @can('show task')
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('tasks.show', ['task' => $task->id]) }}"> details</a></td>
                                @endcan
                                @can('edit task')
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('tasks.edit', ['task' => $task->id]) }}"> edit</a></td>
                                @endcan
                                @can('delete task')
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('tasks.delete', ['task' => $task->id]) }}"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24">
                                                <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                            </svg> </a></td>
                                @endcan
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <div class="w-full mt-12 pb-14">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> done tasks
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">status:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">user:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">description:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">details:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">edit:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">delete:</th>

                    </tr>
                    </thead>
                    <tbody class="text-gray-700 ">
                    @foreach($tasks as $task )
                        @if($task->label->id == '3')
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">{{$task->name}}</td>
                                <td class="w-1/3 text-left py-3 px-4">{{$task->label->name}}</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">{{$task->user->name}}</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href=""> {{$task->description}}</a></td>
                                @can('show task')
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('tasks.show', ['task' => $task->id]) }}"> details</a></td>
                                @endcan
                                @can('edit task')
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('tasks.edit', ['task' => $task->id]) }}"> edit</a></td>
                                @endcan
                                @can('delete task')
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('tasks.delete', ['task' => $task->id]) }}"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24">
                                                <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                            </svg> </a></td>
                                @endcan
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>



        @endcan


    </main>

@endsection
