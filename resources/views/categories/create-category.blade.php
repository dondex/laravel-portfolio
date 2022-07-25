@extends('layout')

@section('head')
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('main')
    <main class="container" style="background-color: #fff">
        <section>
            <h1 class="p-5 text-center">Create New Category</h1>
            @include('includes.flash-message')

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form action="{{route('categories.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12 py-3">
                                    <label for="name"><span>Name</span></label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                    @error('name')
                                    {{-- The $attributeValue field is/must be $validationRule --}}
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                            <button class="btn btn-danger mt-3" type="submit" value="Submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="create-categories mt-3">
                <a class="btn btn-success" href="{{route('categories.index')}}">Categories List <span>&#8594;</span></a>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection