@extends('layout')

@section('main')
<main>
    <section id="home-featured">
        <div class="container p-0"  style="max-width: 1140px;">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h1 class="fw-normal my-3">MY BLOG ROAD TO FULL STACK DEVELOPER</h1>
                    <p class="fw-light">Full Stack Developer All Projects</p>
                    <span>Written By Dondex Chavez</span>
                    <div class="teaser col-lg-10 col-md-10 col-sm-10 col-xs-12 d-flex position-relative flex-column">
                        <div class="bg-dark mt-3">
                            <h2 class="text-light fw-light px-5 pt-1">
                                <strong>MY BLOG</strong>
                            </h2>
                        </div>
                        <div class="mb-3">
                            <img class="img-fluid mb-3" src="{{asset('/image/blog-image/blog-image.jpg')}}" alt="covid-19">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 py-3">
                    <div class="teaser d-flex position-relative flex-column">
                        <div class="bg-dark">
                            <h5 class="text-light fw-light px-2 py-1">
                                <strong>Top Stories</strong>
                            </h5>
                        </div>
                        <div class="">
                            <img class="img-fluid" src="{{asset('/image/web-design.jpg')}}" alt="covid-19">
                        </div>
                    </div>
                    <div class="">
                        <ul class="px-3 pt-2" style="list-style-type: none; font-size: 15px;">
                            @foreach ($posts as $post)
                                <li class="py-2" style="border-bottom: 1px solid #D8D8D8;"><a style="color: #000; text-decoration: none;" href="{{route('blog.show', $post)}}">{{$post->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ads-1" style=" background-image: url('{{asset('/image/blog-image/multi1.jpg')}}'); background-position: center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
        <div class="container" style="max-width: 1140px; height: 40vh;">
            <div class="row">
                
            </div>
        </div>
    </section>
    <section id="home-featured">
        <div class="container p-0"  style="max-width: 1140px;">
            @include('includes.flash-message')
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <form class="d-flex mt-3" role="search" action="">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                    
                        <div class="row row-cols-2 my-3">
                            @forelse ($posts as $post)
                                <div class="px-5 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                                    <div class="post-item">
                                        <div>
                                            @auth
                                                @if (auth()->user()->id === $post->user->id)
                                                <div class="post-buttons d-flex justify-content-start align-items-center mt-3">
                                                    <button class="btn btn-danger"><a class="text-light" style="text-decoration: none;" href="{{route('blog.edit', $post)}}">Edit</a></button>
                                                    <form action="{{route('blog.destroy', $post)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input class="btn btn-primary mx-2" type="submit" value="Delete">
                                                    </form>
                                                </div>
                                                @endif
                                            @endauth
                                            <div class="card my-3">
                                                <a href="{{route('blog.show', $post)}}"><img style="border: 1px solid #777; height: 350px; width: 100%;"  src="{{asset($post->imagePath)}}" class="card-img-top img-fluid" alt=""></a>
                                                <div class="card-body">
                                                  <h5  class="pt-2 card-title" style="color: #000;"><a style="text-decoration: none; color:black;" href="{{route('blog.show', $post)}}">{{$post->title}}</a></h5>
                                                  <p class="card-text">Written By {{$post->user->name}}</p>
                                                  <p class="card-text"><small class="text-muted">{{$post->created_at->diffForHumans()}}</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                @empty
                                    <p>Sorry, currently there is no blog post related to that search!</p>
                            @endforelse
                            
                            <div class="mt-4">
                                {{$posts->links()}}
                            <br>
                            </div>
                            
                        </div>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-3">
                    <div class="teaser d-flex position-relative flex-column">
                        <div class="bg-dark">
                            <h5 class="text-light fw-light px-2 py-1">
                                <strong>Live Stream</strong>
                            </h5>
                        </div>
                        <div class="col-12">
                            <iframe width="356px" height="300"
                                src="{{asset('https://www.youtube.com/embed/5YDVJaItmaY')}}">
                            </iframe>
                        </div>
                    </div>
                    <div class="my-5 col-12">
                        <iframe width="363.5" height="315"
                            src="{{asset('https://www.youtube.com/embed/kUMV7jmbpPY')}}">
                        </iframe>
                    </div>
                    <div class="mb-5">
                        <img class="img-fluid" style="width: 100%; height: 200px;" src="{{asset('./image/blog-image/sponsor-logo2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="ads-2">
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
    <section id="featured">
        <div class="container p-0" style="max-width: 1140px;">
            <h2 class="fw-normal my-3">Featured</h2>
            <hr style="border: 3px solid #000;"/>
        </div>
        <div class="container p-0" style="max-width: 1140px;">
            <div class="row py-2">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    <div class="post-item">
                        <div>
                            <img class="img-fluid" src="{{asset('/image/responsive.jpg')}}" alt="">
                            <h5 class="pt-2" style="color: #000;"><a style="text-decoration: none; color:black;" href="{{route('blog.show')}}">This country wants a four-day work week. But it's not about making workers happy</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    <div class="post-item">
                        <div>
                            <img class="img-fluid" src="{{asset('/image/responsive.jpg')}}" alt="">
                            <h5 class="pt-2" style="color: #000;"><a style="text-decoration: none; color:black;" href="{{route('blog.show')}}">Here's why crypto experts are shrugging off the bitcoin crash</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    <div class="post-item">
                        <div>
                            <img class="img-fluid" src="{{asset('/image/responsive.jpg')}}" alt="">
                            <h5 class="pt-2" style="color: #000;"><a style="text-decoration: none; color:black;" href="{{route('blog.show')}}">John Stamos 'disappointed' In Memoriam tribute at Tonys didn't include Bob Saget</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    <div class="post-item">
                        <div>
                            <img class="img-fluid" src="{{asset('/image/responsive.jpg')}}" alt="">
                            <h5 class="pt-2" style="color: #000;"><a style="text-decoration: none; color:black;" href="{{route('blog.show')}}"> PH’s top powerlifter appeals for financial support in World Games stint</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    <div class="post-item">
                        <div>
                            <img class="img-fluid" src="{{asset('/image/responsive.jpg')}}" alt="">
                            <h5 class="pt-2" style="color: #000;"><a style="text-decoration: none; color:black;" href="{{route('blog.show')}}"> PH’s top powerlifter appeals for financial support in World Games stint</a> </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-2">
                    <div class="post-item">
                        <div>
                            <img class="img-fluid" src="{{asset('/image/responsive.jpg')}}" alt="">
                            <h5 class="pt-2" style="color: #000;"><a style="text-decoration: none; color:black;" href="{{route('blog.show')}}"> Filipino bettors get a chance to win Mega Millions’ $273M jackpot this Friday</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</main>
@endsection