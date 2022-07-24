@extends('layout')

@section('main')
    <div class="categories-list text-center">
        <h1>Categories List</h1>

        @if (session('status'))
                <p style="color:#fff; width:100%; font-size: 18px; font-weight:600; text-align:center;background: #5cb85c;padding:17px 0;margin-bottom: 6px;">{{session('status')}}</p>
        @endif
            
        @foreach ($categories as $category)
            <div class="row">
                <div class="item d-flex justify-content-center align-items-center mt-5 my-2">
                    <p class="fs-4 mx-5">{{$category->name}}</p>
                    <div>
                        <a class="btn btn-primary mx-5" href="{{route('categories.edit', $category)}}">Edit</a>
                    </div>
                    <form action="{{route('categories.destroy', $category)}}" method="post">
                        @method('delete')
                        @csrf
                        <input class="btn btn-danger mx-5" type="submit" value="Delete">
                    </form>
                </div>
                <hr/>
            </div>
        @endforeach
        <div class="index-categories mt-4">
            <a class="btn btn-success" href="{{route('categories.create')}}">Create Category <span>&#8594;</span></a>
        </div>
    </div>
@endsection