@extends('layouts.layoutadmin')

@section('content')

        <main class="w-full flex-grow p-6">

                    <div class="bg-white border border-4 rounded-lg shadow relative m-10">


                        <div class="flex items-start justify-between p-5 border-b rounded-t">
                            <h3 class="text-xl font-semibold">
                                Are you sure you wanna delete this task?
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="product-modal">
                                <a href="{{route('users.index')}}"> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
                            </button>
                        </div>

                        @if($errors->any())
                            <div class="bg-red-200 text-red-900 rounded-lg shadow-md p-6 pr-10 mb-8" style="...">
                                <ul class="nt-3 list-disc list-inside text-sm text-red-600">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>

                            </div>
                        @endif




                        <div class="p-6 space-y-6">
                            <form id="form"  action="{{route('users.destroy', ['user'=> $user->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">User id</label>
                                        <input type="text" name="id" id="id" value="{{old('name', $user->id)}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" disabled  required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">User Name</label>
                                        <input type="text" name="name" id="name" value="{{old('name', $user->name)}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" disabled  required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">User Email</label>
                                        <input type="text" name="email" id="email" value="{{old('name', $user->email)}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" disabled  required="">
                                    </div>
                                    {{--                        <div class="col-span-6 sm:col-span-3">--}}
                                    {{--                            <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Price</label>--}}
                                    {{--                            <input type="number" name="price" id="price" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="$2300" required="">--}}
                                    {{--                        </div>--}}
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">User Role</label>
                                        <input type="text" name="name" id="name" value="{{old('name', $user->getRoleNames())}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" disabled  required="">
                                    </div>
                                </div>


                                <div class="p-6 border-t border-gray-200 rounded-b">
                                    <button class=" bg-sidebar text-white focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">delete</button>
                                </div>
                            </form>
                        </div>



                    </div>




        </main>
@endsection
