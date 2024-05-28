@extends('layouts.layoutpublic')

@section('content')

    <div class="w-full px-6 py-12 bg-gray-100 border-t">
       <div class="flex">
           <h2 class="font-bold px-4">You wanna manage your tasks like this?</h2>
           <p class="font-semibold">Make sure to sign up and go to tasks!</p>
       </div>


        <div class="container mx-auto pb-10">
            <h3 class="text-xl font-bold">example</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- To-Do Column -->

                <div class="col">
                    <h2 class="text-2xl font-semibold py-4">To-Do</h2>
                    @foreach($tasks as $task)
                        @if($task->label->name == 'to-do')
                            <div class="bg-white rounded-lg shadow p-4 mb-4">
                                <h2 class="text-xl font-semibold py-2 border-b">
                                    <a href="#" class="text-black no-underline">User: {{ $task->user->name }}</a>
                                </h2>

                                <h2 class="text-xl font-semibold py-2 border-b">
                                    <a href="#" class="text-black no-underline">Name: {{ $task->name }}</a>
                                </h2>

                                <h2 class="text-xl font-semibold py-2 border-b">
                                    <a href="#" class="text-black no-underline">Status: {{ $task->label->name }}</a>
                                </h2>

                                <p class="text-base py-2">Description: {{ $task->description }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>

                <!-- Doing Column -->
                <div class="col">
                    <h2 class="text-2xl font-semibold py-4">Doing</h2>
                    @foreach($tasks as $task)
                        @if($task->label->name == 'doing')
                            <div class="bg-white rounded-lg shadow p-4 mb-4">
                                <h2 class="text-xl font-semibold py-2 border-b">
                                    <a href="#" class="text-black no-underline">User: {{ $task->user->name }}</a>
                                </h2>

                                <h2 class="text-xl font-semibold py-2 border-b">
                                    <a href="#" class="text-black no-underline">Name: {{ $task->name }}</a>
                                </h2>

                                <h2 class="text-xl font-semibold py-2 border-b">
                                    <a href="#" class="text-black no-underline">Status: {{ $task->label->name }}</a>
                                </h2>

                                <p class="text-base py-2">Description: {{ $task->description }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>

                <!-- Done Column -->
                <div class="col">
                    <h2 class="text-2xl font-semibold py-4">Done</h2>
                    @foreach($tasks as $task)
                        @if($task->label->name == 'done')
                            <div class="bg-white rounded-lg shadow p-4 mb-4">
                                <h2 class="text-xl font-semibold py-2 border-b">
                                    <a href="#" class="text-black no-underline">User: {{ $task->user->name }}</a>
                                </h2>

                                <h2 class="text-xl font-semibold py-2 border-b">
                                    <a href="#" class="text-black no-underline">Name: {{ $task->name }}</a>
                                </h2>

                                <h2 class="text-xl font-semibold py-2 border-b">
                                    <a href="#" class="text-black no-underline">Status: {{ $task->label->name }}</a>
                                </h2>

                                <p class="text-base py-2">Description: {{ $task->description }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container max-w-4xl mx-auto pb-10 flex justify-between items-center px-3">
            <div class="text-xs">
                {{ $tasks->links() }}
            </div>
        </div>
    </div>
@endsection
