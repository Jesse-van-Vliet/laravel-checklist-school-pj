@extends('layouts.layoutadmin')

@section('content')
    <main class="w-full flex-grow p-6">
        <div>
            <button>
                <a href="{{route('tasks.index')}}" class="block bg-blue-500 px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900
                focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">Go back</a>
            </button>
        </div>

        @if(@auth()->user()->id == $task->user_id | @auth()->user()->hasRole('admin'))
        <div class="w-full mt-12 pb-14">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> task: {{$task->name}}
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>

                    </tr>
                    </thead>
                    <tbody class="text-gray-700 ">
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">{{$task->name}}</td>
                            </tr>
                    </tbody>
                </table>
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">description</th>

                    </tr>
                    </thead>
                    <tbody class="text-gray-700 ">
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4">{{$task->description}}</td>
                    </tr>
                    </tbody>
                </table>
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">name</th>

                    </tr>
                    </thead>
                    <tbody class="text-gray-700 ">
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4">{{$task->user->name}}</td>
                    </tr>
                    </tbody>
                </table>

                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">status</th>

                    </tr>
                    </thead>
                    <tbody class="text-gray-700 ">
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4">{{$task->label->name}}</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>


            @else
            <div class="flex flex-col items-center">
                <h1 class="text-[120px] font-extrabold text-gray-700">Not permitted to view this task</h1>
                <p class="text-2xl font-medium text-gray-600 mb-6">you are trying to view a task that isn't yourse</p>
            </div>
            </body>

        @endif



    </main>


@endsection
