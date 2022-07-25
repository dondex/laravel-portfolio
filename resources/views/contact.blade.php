@extends('layout');

@section('main')
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="my-3" style="color: crimson;">Contact</h1>
                    <hr style="width: 20%;" class="mb-5"/>
                </div>
                @include('includes.flash-message')
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row pt-3">
                        <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                            <i class='bx bxs-map bx-lg' style="color: crimson;"></i>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                            <h3>Address</h3>
                            <p>RCD Royale Dashboards, Sabang,<br/>
                                Tuy, Batangas</p>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                            <i class='bx bxs-phone-call bx-lg' style="color: crimson;"></i>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                            <h3>Give me a ring</h3>
                            <p>Dexter John M. Chavez<br/>
                                0906-940-6876</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    
                    <form action="{{route('contact.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12 py-3">
                                <label for="name"><span>Name</span></label>
                                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control" placeholder="Name">
                                @error('name')
                                {{-- The $attributeValue field is/must be $validationRule --}}
                                    <p style="color: red;">{{$message}}</p>
                                @enderror
                            </div>
                        
                            <div>
                                <label for="email"><span>Email</span></label>
                                <input type="text" id="email" name="email" value="{{old('email')}}" placeholder="Email" class="form-control mb-3">
                                @error('email')
                                {{-- The $attributeValue field is/must be $validationRule --}}
                                    <p style="color: red;">{{$message}}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="message"><span>Your Message</span></label>
                                <textarea id="message" name="message" class="form-control mb-3"  cols="10" rows="10">{{old('message')}}</textarea>
                                @error('message')
                                {{-- The $attributeValue field is/must be $validationRule --}}
                                    <p style="color: red;">{{$message}}</p>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" value="Submit" class="btn btn-danger">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

