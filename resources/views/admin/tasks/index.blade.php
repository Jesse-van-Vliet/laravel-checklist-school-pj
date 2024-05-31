@extends('layouts.layoutadmin')

@section('content')
    <main class="w-full flex-grow p-6">
        <h3 class="text-5xl  text-center">Tasks</h3>
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
                            <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('tasks.delete', ['task' => $task->id]) }}"> delete</a></td>
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
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('tasks.delete', ['task' => $task->id]) }}"> delete</a></td>
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
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('tasks.delete', ['task' => $task->id]) }}"> delete</a></td>
                                @endcan
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>



    </main>

@endsection
