@extends('layouts.layoutadmin')

@section('content')
    @can('create task')
    <main class="w-full flex-grow p-6">
        <div class="bg-white border border-4 rounded-lg shadow relative m-10">

            <div class="flex items-start justify-between p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold">
                    Create Task
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="product-modal">
                  <a href="{{route('tasks.index')}}"> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
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
                <form id="form"  action="{{route('tasks.store')}}" method="POST">
                    @csrf
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">Task Name</label>
                            <input type="text" name="name" id="name" value="{{old('name')}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"  required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Label</label>
                            <select class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" name="label_id" id="label_id">
                                @foreach($labels as $label)
                                    <option value="{{$label->id}}" @selected($label->id = old('label_id'))> {{ $label->name }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">user</label>
                             <select class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" name="user_id" id="user_id">
                                     <option   value="{{auth()->user()->id}}" @selected(auth()->user()->id = old('user_id', auth()->user()->id))> {{ auth()->user()->name }} </option>
                             </select>
                        </div>
{{--                        <div class="col-span-6 sm:col-span-3">--}}
{{--                            <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Price</label>--}}
{{--                            <input type="number" name="price" id="price" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="$2300" required="">--}}
{{--                        </div>--}}
                        <div class="col-span-full">
                            <label for="product-details" class="text-sm font-medium text-gray-900 block mb-2">Description</label>
                            <textarea id="description" name="description" value="{{old('description')}}}" required rows="6" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"></textarea>
                        </div>
                    </div>


                    <div class="p-6 border-t border-gray-200 rounded-b">
                        <button class=" bg-sidebar text-white focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Create Task</button>
                    </div>
                </form>
            </div>



        </div>


    </main>
    @endcan
@endsection
