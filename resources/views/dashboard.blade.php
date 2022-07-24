@extends('layout');

@section('main')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        .dashboard a img:hover {
            box-shadow: 10px 15px 10px #414040;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

                    <div class="dashboard">
                        <div class="row mt-5">
                            <div class="col-4">
                                <a href="{{route('blog.create')}}"><img class="img-fluid" style="height: 80%; transition-timing-function: ease-in; transition: 0.5s;" src="{{asset('./image/web-dev.jpg')}}" alt=""></a>
                                <h1 class="text-center mt-4 fw-bold">Create Post</h1>
                            </div>
                            <div class="col-4">
                                <a href="{{route('categories.create')}}"><img class="img-fluid" style="height: 80%; transition-timing-function: ease-in; transition: 0.5s;" src="{{asset('./image/web-design.jpg')}}" alt=""></a>
                                <h1 class="text-center mt-4 fw-bold">Create Category</h1>
                            </div>
                            <div class="col-4">
                                <a href="{{route('categories.index')}}"><img class="img-fluid" style="height: 80%; transition-timing-function: ease-in; transition: 0.5s;" src="{{asset('./image/seo.jpg')}}" alt=""></a>
                                <h1 class="text-center mt-4 fw-bold">Categories List</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
