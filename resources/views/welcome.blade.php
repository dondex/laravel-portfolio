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
                            <a href="{{route('contact.index')}}"><button class="btn btn-danger my-4" style="width: 20%;">Hire Me</button></a>
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
        <section id="skill-logo">
            <div class="container-fluid" style="height: 50vh; max-width: 992px;">
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="img-fluid" style="box-shadow: 5px 10px 8px #808080;" src="{{asset('./image/logo/skills.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <img class="img-fluid" style="height: 95%;" src="{{asset('./image/web-development-banner.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="card mb-3" style="width: 100%; border-radius: 0%; height: 95%">
                            <img src="{{asset('./image/web-dev.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title" style="color: crimson;">Web Development</h5>
                            <p class="card-text pb-4">Building and maintenance of websites; it’s the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="card my-3" style="width: 100%; border-radius: 0%; height: 95%">
                            <img src="{{asset('./image/web-design.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title" style="color: crimson;">Web Design</h5>
                            <p class="card-text pb-4">Works on the appearance, layout, and, in some cases, content of a website. Appearance, for instance, relates to the colors, font, and images used.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="card my-3" style="width: 100%; border-radius: 0%; height: 95%">
                            <img src="./image/responsive.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title" style="color: crimson;">Mobile Responsive</h5>
                            <p class="card-text pb-4">A website or email is displayed on a mobile device and it automatically adjusts it's sizing, layout, and proportions to display in a legible manner on the device.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="card my-3" style="width: 100%; border-radius: 0%; height: 95%">
                            <img src="{{asset('./image/seo.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title" style="color: crimson;">SEO</h5>
                            <p class="card-text pb-4">Process aims to increase a business's organic search results, driving organic search traffic to the site.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="download-cv">
            <div class="container-fluid mt-5" style="background-image: url(./image/bg-cv.jpg); height: 40vh; background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
                <div class="row">
                    <div class="col-5">
                        
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-12 col-sm-6-col-xs-6 text-center" style="margin-top: 5%;">
                        <div class="bg-light py-5 px-5">
                            <div>
                                <h4 class="fw-normal">View my CV</h4>
                                <a href="{{route('pdf.downloadPdf')}}"><button class="btn btn-danger">Download</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio">
            <div class="container" style="height: 70vh;">
                <div class="row">
                    <div class="col-12">
                        <h1 class="my-3" style="color: crimson;">Portfolio</h1>
                        <hr style="width: 20%;" class="mb-5"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-port" style="position: relative; width: 400px;">
                            <img class="img-fluid image-in" style="box-shadow: 5px 10px 8px #808080; display:block; width: 100%;height: 250px;" src="{{asset('./image/portfolio/my-port.png')}}" alt="">
                            <div class="image-overlay d-flex align-items-center justity-content-center flex-column" style="position: absolute; top: 0; left:0;width: 100%; height:100%; background: rgba(0,0,0, 0.6); opacity: 0;">
                                <div class="image-btn my-auto">
                                    <a href="https://github.com/dondex/laravel-portfolio" target="_blank"><button class="btn btn-light">Source Code</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <img class="img-fluid" style="height: 150%; width: 100%; box-shadow: 5px 10px 8px #808080;" src="{{asset('./image/portfolio/under_construction.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <img class="img-fluid" style="height: 150%; width: 100%; box-shadow: 5px 10px 8px #808080;" src="{{asset('./image/portfolio/under_construction.jpg')}}" alt="">
                    </div> --}}
                    
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
    