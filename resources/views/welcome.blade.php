@extends('layout')

@section('main')
    <main>
        <section id="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 my-auto">
                        <div class="d-flex flex-column">
                            <h2 class="fw-bold" style="font-size: 5rem;">Hello I'am Dex</h2>
                            <h1 class="fw-bold mb-3" style="font-size: 2.5rem; color: crimson;">Your Full Stack Developer</h1>
                            <span style="font-size: 1.1rem;">
                                A Computer Science Student at Imus Computer College (ICC) <br/>
                                with knowledge in Frontend and Backend Web Development
                            </span>
                            <button class="btn btn-danger my-4" style="width: 20%;">Hire Me</button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 my-5">
                        <img class="img-fluid" src="{{asset('./image/undraw_developer_activity_re_39tg (2).svg')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="brand-services">
            <div class="container">
                <div class="row my-5">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="text-center">
                            <i class='bx bx-desktop bx-lg bx-tada' style="color: crimson;"></i>
                            <h5 class="my-2">Web Development</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="text-center">
                            <i class='bx bxs-pencil bx-lg bx-tada' style="color: crimson;" ></i>
                            <h5 class="my-2">Web Design</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="text-center">
                            <i class='bx bxs-rocket bx-lg bx-tada' style="color: crimson;" ></i>
                            <h5 class="my-2">Web Optimize</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="text-center">
                            <i class='bx bxs-right-top-arrow-circle bx-lg bx-tada' style="color: crimson;"></i>
                            <h5 class="my-2">SEO</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <img class="img-fluid" style="height: 95%;" src="{{asset('./image/web-development-banner.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="card mb-3" style="width: 100%; border-radius: 0%; height: 95%">
                            <img src="{{asset('./image/web-dev.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title" style="color: crimson;">Web Development</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-body">
                            <a href="#" style="text-decoration: none; color: crimson;" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="card my-3" style="width: 100%; border-radius: 0%; height: 95%">
                            <img src="{{asset('./image/web-design.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title" style="color: crimson;">Web Design</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-body">
                            <a href="#" style="text-decoration: none; color: crimson;" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="card my-3" style="width: 100%; border-radius: 0%; height: 95%">
                            <img src="./image/responsive.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title" style="color: crimson;">Mobile Responsive</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-body">
                            <a href="#" style="text-decoration: none; color: crimson;" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="card my-3" style="width: 100%; border-radius: 0%; height: 95%">
                            <img src="{{asset('./image/seo.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title" style="color: crimson;">SEO</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-body">
                            <a href="#" style="text-decoration: none; color: crimson;" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="view-cv">
            <div class="container-fluid mt-5" style="background-image: url(./image/bg-cv.jpg); height: 40vh; background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
                <div class="row">
                    <div class="col-5">
                        
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-12 col-sm-6-col-xs-6 text-center" style="margin-top: 5%;">
                        <div class="bg-light py-5 px-5">
                            <div>
                                <h4 class="fw-normal">View my CV</h4>
                                <button class="btn btn-danger">download</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="my-3" style="color: crimson;">Portfolio</h1>
                        <hr style="width: 20%;" class="mb-5"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <img class="img-fluid" style="height: 80%; width: 100%; box-shadow: 5px 10px 8px #808080;" src="{{asset('./image/portfolio/port1.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <img class="img-fluid" style="height: 80%; width: 100%; box-shadow: 5px 10px 8px #808080;" src="{{asset('./image/portfolio/port2.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <img class="img-fluid" style="height: 80%; width: 100%; box-shadow: 5px 10px 8px #808080;" src="{{asset('./image/portfolio/port4.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <img class="img-fluid" style="height: 80%; width: 100%; box-shadow: 5px 10px 8px #808080;" src="{{asset('/image/portfolio/port5.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <img class="img-fluid" style="height: 80%; width: 100%; box-shadow: 5px 10px 8px #808080;" src="{{asset('./image/portfolio/port1.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <img class="img-fluid" style="height: 80%; width: 100%; box-shadow: 5px 10px 8px #808080;" src="{{asset('./image/portfolio/port2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="view-blog">
            <div class="container-fluid mt-5" style="background-image: url(./image/bg-blog1.jpg); height: 40vh; background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
                <div class="row">
                    <div class="col-5">
                        
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-12 col-sm-6-col-xs-6 text-center" style="margin-top: 5%;">
                        <div class="bg-light py-5 px-5">
                            <div>
                                <h4 class="fw-normal">Visit my Blog</h4>
                                <button class="btn btn-danger"><a style="text-decoration: none; color: white;" href="{{route('blog.index')}}">Click Here</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        
                    </div>
                </div>
            </div>
        </section>
        
    </main>
@endsection
    