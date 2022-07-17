@extends('layout')

@section('main')
<main>
    <section id="home-featured">
        <div class="container p-0"  style="max-width: 1140px;">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <h1 class="fw-normal my-3">{{$post->title}}</h1>
                        <h6 class="fw-semibold">Written By {{$post->user->name}}</h6>
                        <hr/>
                        <h6 class="fw-semibold">{{$post->created_at->diffForHumans()}}</h6>
                        <hr/>
                        <div class="teaser col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mb-3">
                                <img class="img-fluid" src="{{asset($post->imagePath)}}" alt="covid-19">
                                <p class="mt-5">{!!$post->body!!}</p>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 py-3">
                    <div class="teaser d-flex position-relative flex-column">
                        <div class="bg-danger">
                            <h5 class="text-light fw-light px-2 py-1">
                                <strong>Top Stories</strong>
                            </h5>
                        </div>
                        <div class="">
                            <img class="img-fluid" src="{{asset('/image/web-design.jpg')}}" alt="covid-19">
                        </div>
                    </div>
                    <div class="">
                            <ul class="p-0 pt-2" style="list-style-type: none; font-size: 15px;">
                                <li class="py-2" style="border-bottom: 1px solid #D8D8D8;"><a style="color: #000; text-decoration: none;" href="#">{{$post->title}}</a></li>
                            </ul>
                    </div>
                    <div class="teaser d-flex position-relative flex-column">
                        <div class="bg-dark">
                            <h5 class="text-light fw-light px-2 py-1">
                                <strong>Live Stream</strong>
                            </h5>
                        </div>
                        <div class="">
                            <iframe width="363.5" height="300"
                                src="{{asset('https://www.youtube.com/embed/5YDVJaItmaY')}}">
                            </iframe>
                        </div>
                    </div>
                    <div class="my-5">
                        <iframe width="363.5" height="315"
                            src="{{asset('https://www.youtube.com/embed/kUMV7jmbpPY')}}">
                        </iframe>
                    </div>
                    <div class="mb-5">
                        <img style="width: 100%; height: 200px;" src="{{asset('./image/blog-image/sponsor-logo2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="ads-2">
        <div class="container bg-primary" style="max-width: 1140px; height: 20vh;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="text-center text-light my-5">
                        Advertisement
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section id="Related">
        <div class="container p-0" style="max-width: 1140px;">
            <h2 class="fw-normal my-3">Related Blog</h2>
            <hr style="border: 3px solid #000;"/>
        </div>
        <div class="container p-0" style="max-width: 1140px;">
            <div class="row py-2">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    <div class="post-item">
                        <div>
                            <img class="img-fluid" src="{{asset('/image/responsive.jpg')}}" alt="">
                            <h5 class="pt-2" style="color: #000;">   This country wants a four-day work week. But it's not about making workers happy </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    <div class="post-item">
                        <div>
                            <img class="img-fluid" src="{{asset('/image/responsive.jpg')}}" alt="">
                            <h5 class="pt-2" style="color: #000;">   Here's why crypto experts are shrugging off the bitcoin crash </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    <div class="post-item">
                        <div>
                            <img class="img-fluid" src="{{asset('/image/responsive.jpg')}}" alt="">
                            <h5 class="pt-2" style="color: #000;">   John Stamos 'disappointed' In Memoriam tribute at Tonys didn't include Bob Saget </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection