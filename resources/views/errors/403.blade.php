@extends('layouts.layoutpublic')

@section('content')
{{--    title--}}
    <h1 class="text-center text-xl md:text">
        error
    </h1>
    <div class="w-full px-6 py-12 bg-gray-100 border-t">
        <div class="container max-w-4xl mx-auto flex justify-center flex-wrap md:flex-no-wrap">
            <div class="w-full md:w-1-3">
{{--                body--}}
                <div class="card-body">
                    <div class="bg-red-400 text-red-800 rounded-lg shadow-md p-6 pr-10 mb-8" style="...">{{ $exception->getMessage() }}</div>
                </div>
            </div>
        </div>
{{--        end body--}}
    </div>
@endsection
