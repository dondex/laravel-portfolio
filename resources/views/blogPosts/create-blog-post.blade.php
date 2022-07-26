@extends('layout')

@section('head')
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

@section('main')
    <main class="container" style="background-color: #fff">
        <section>
            <h1 class="p-5 text-center">Create New Post</h1>
            @include('includes.flash-message')
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12 py-3">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                                    @error('title')
                                    {{-- The $attributeValue field is/must be $validationRule --}}
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                               
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12 py-3">
                                    <label for="image">Image</label>
                                    <input class="form-control" type="file" id="image" name="image">
                                    @error('image')
                                    {{-- The $attributeValue field is/must be $validationRule --}}
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <label class="py-1" for="body">Body</label>
                            <textarea class="form-control" name="body" id="body" cols="10" rows="10">{{old('body')}}</textarea>
                            @error('body')
                                    {{-- The $attributeValue field is/must be $validationRule --}}
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                            
                            <button class="btn btn-danger mt-3" type="submit" value="Submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection