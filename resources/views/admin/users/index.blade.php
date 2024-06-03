@extends('layouts.layoutadmin')

@section('content')
    <main class="w-full flex-grow p-6">
        <h3 class="text-5xl  text-center">users</h3>


        <div class="w-full mt-12">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> User list
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">id</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">name</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">email</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Role</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">details:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">edit:</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">delete:</th>


                    </tr>
                    </thead>
                    <tbody class="text-gray-700">
                    @foreach($users as $user)
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">{{$user->id}}</td>
                                <td class="w-1/3 text-left py-3 px-4">{{$user->name}}</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" >{{$user->email}}</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" >{{$user->getRoleNames()}}</a></td>
                                @can('show user')
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('users.show', ['user' => $user->id]) }}"> details</a></td>
                                @endcan
                                @can('edit user')
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('users.edit', ['user' => $user->id]) }}"> edit</a></td>
                                @endcan
                                @can('delete user')
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="{{ route('users.delete', ['user' => $user->id]) }}"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24">
                                                <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                            </svg> </a></td>
                                @endcan
                            </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>





    </main>

@endsection
