<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style.css')}}">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" /> --}}
    @yield('head')


  </head>
  
  <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
            <a class="navbar-brand" href="/"><img style="width: 12%; height:20%;" src="{{asset('./image/logo1.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link {{Request::routeIs('welcome.index') ? 'active' : ''}}" aria-current="page" href="{{route('welcome.index')}}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Services</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{Request::routeIs('blog.index') ? 'active' : ''}}" href="{{route('blog.index')}}">Blog</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
                  </li>
                  @guest
                    <li class="nav-item">
                      <a class="nav-link {{Request::routeIs('login') ? 'active' : ''}}" href="{{route('login')}}">Login</a>
                    </li>
                  @endguest
                  @auth
                    <li class="nav-item">
                      <a class="nav-link {{Request::routeIs('register') ? 'active' : ''}}" href="{{route('register')}}">Register</a>
                    </li>
                  @endauth
                 
                  @auth
                    <li class="nav-item">
                      <a class="nav-link {{Request::routeIs('dashboard') ? 'active' : ''}}" href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                  @endauth
                </ul>
            </div>
            </div>
        </nav>
    </header>
    
    @yield("main")
    
    <section class="Footer">
        <footer class="bg-dark text-white text-center text-md-start mt-5">
          <div class="container py-5">
            <div class="row">
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">My Portfolio</h5>
                <p>
                  My portfolio that showcasing my skills and talent to pursue my dreams to become a Full Stack Developer. I can provide clean code and pixel perfect design. A passionate Web Developer ready to learn new technology and new things.
                </p>
              </div>
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Pages</h5>
      
                <ul class="list-unstyled mt-3">
                  <li>
                    <a href="#!" style="text-decoration: none;" class="text-white">About</a>
                  </li>
                  <li>
                    <a href="#!" style="text-decoration: none;" class="text-white">Services</a>
                  </li>
                  <li>
                    <a href="#!" style="text-decoration: none;" class="text-white">Portfolio</a>
                  </li>
                  <li>
                    <a href="#!" style="text-decoration: none;" class="text-white">Contact</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Social Links</h5>
      
                <ul class="list-unstyled mt-3">
                  <li>
                    <a href="#!" style="text-decoration: none;" class="text-white">Facebook</a>
                  </li>
                  <li>
                    <a href="#!" style="text-decoration: none;" class="text-white">Github</a>
                  </li>
                  <li>
                    <a href="#!" style="text-decoration: none;" class="text-white">Linkedin</a>
                  </li>
                  <li>
                    <a href="#!" style="text-decoration: none;" class="text-white">UpWork</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Developed by :
            <a style="text-decoration: none;" class="text-danger" href="https://www.facebook.com/dondex.chavez.52">Dondex Chavez</a>
          </div>
        </footer>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    @yield('scripts')
  </body>
</html>