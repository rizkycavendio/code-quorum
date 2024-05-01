<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Code Quorum</title>

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
         <!-- Favicon-->
         <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
         <!-- Font Awesome icons (free version)-->
         <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
      {{-- NAVBAR --}}
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container flex justify-content-between">
              <a class="navbar-link" href="{{ route('home') }}">
                <img class="h-80px" src="{{ url('assets/img/logo.png') }}" alt="Logo Code Quorum">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Forum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">About Us</a>
                  </li>
                </ul>
                <form class="d-flex w-50" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  {{-- <button class="btn btn-light" type="submit">Search</button> --}}
                </form>
                <ul  class="navbar-nav ms-auto my-2 my-lg-0">
                  <li class="nav-item my-auto">
                    <a class="nav-link text-nowrap text-blue" href="">Log In</a>
                  </li>
                  <li class="nav-item ps-1 pe-0">
                    <a class="btn btn-register text-white" href="">Register</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        {{-- HEADER --}}
        <header class="container mb-2">
          <div class="row align-items-center flex-sm-column flex-md-row">
            <div class="col-md-6">
              <h1>Selamat Datang di </h1> <h1 class="text-blue-main">Code Quorum!</h1>
              <p class="mb-4">Tempat di Mana Kode Berkumpul dan Pengetahuan Berkembang!</p>
              <a href="" class="btn btn-hero-first">Register</a>
              <a href="" class="btn btn-hero-second">Join Forum</a>
            </div>
            <div class="col-md-6 order-first order-lg-last">
              <img class="hero-image" src="{{ url("assets/img/illustration_home.jpg") }}" alt="Ilustrasi home page">
            </div>
          </div>
        </header>
        {{-- MAIN --}}
        <main>
          {{-- SECTION 1 --}}
            <section class="page-section" id="services">
              <div class="container p-5">
                  {{-- <div class="text-center">
                      <h2 class="section-heading text-uppercase">Services</h2>
                      <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                  </div> --}}
                  <div class="row text-center">
                      <div class="col-md-4">
                          <span class="fa-stack fa-4x">
                              <i class="fas fa-circle fa-stack-2x text-primary"></i>
                              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                          </span>
                          <h4 class="my-3">Ask the Community</h4>
                          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                      </div>
                      <div class="col-md-4">
                          <span class="fa-stack fa-4x">
                              <i class="fas fa-circle fa-stack-2x text-primary"></i>
                              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                          </span>
                          <h4 class="my-3">Responsive Design</h4>
                          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                      </div>
                      <div class="col-md-4">
                          <span class="fa-stack fa-4x">
                              <i class="fas fa-circle fa-stack-2x text-primary"></i>
                              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                          </span>
                          <h4 class="my-3">Web Security</h4>
                          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                      </div>
                  </div>
                </div>
            </section>
          {{-- SECTION 2 --}}
          <section class="page-section mt-2" id="services">
            <div class="container p-5">
              <div class="text-center mb-5">
                <h2 class="section-heading">Tanya Jawab & Berkolaborasi</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
              </div>
              {{-- Baris 1 --}}
              <div class="row">
                <!-- Kolom Pertama -->
                <div class="col-md-4">
                  <div class="card mb-4 border-0 shadow-lg rounded">
                    <div class="row">
                      <!-- Kolom Pertama di Baris Pertama -->
                      <div class="col-md-2">
                        <img src="{{ url("assets/img/user.png") }}" class="card-img-top img-small" alt="Gambar Postingan 1">
                      </div>
                      <!-- Kolom Kedua di Baris Pertama -->
                      <div class="col-md-10">
                        <div class="card-body bg-white">
                          <h5 class="card-title">Nama Pengguna</h5>
                          <p class="card-text"><small class="text-muted">1 jam yang lalu</small></p>
                        </div>
                      </div>
                    </div>
                    <!-- Baris Kedua -->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card-body bg-white">
                          <h5 class="card-title">Kode JavaScript Error</h5>
                          <p class="card-text">Permisi mau tanya, ada yang bisa bantu kenapa kode webpack saya di JavaScript tidak terbaca? ini sudah saya lampirkan screenshoot-nya juga. Terimakasih.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- Kolom 2 --}}
                <!-- Kolom Pertama -->
                <div class="col-md-4">
                  <div class="card mb-4 border-0 shadow-lg rounded">
                    <div class="row">
                      <!-- Kolom Pertama di Baris Pertama -->
                      <div class="col-md-2">
                        <img src="{{ url("assets/img/user.png") }}" class="card-img-top img-small" alt="Gambar Postingan 1">
                      </div>
                      <!-- Kolom Kedua di Baris Pertama -->
                      <div class="col-md-10">
                        <div class="card-body bg-white">
                          <h5 class="card-title">Nama Pengguna</h5>
                          <p class="card-text"><small class="text-muted">1 jam yang lalu</small></p>
                        </div>
                      </div>
                    </div>
                    <!-- Baris Kedua -->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card-body bg-white">
                          <h5 class="card-title">Kode JavaScript Error</h5>
                          <p class="card-text">Permisi mau tanya, ada yang bisa bantu kenapa kode webpack saya di JavaScript tidak terbaca? ini sudah saya lampirkan screenshoot-nya juga. Terimakasih.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- Kolom 3 --}}
                <!-- Kolom Pertama -->
                <div class="col-md-4">
                  <div class="card mb-4 border-0 shadow-lg rounded">
                    <div class="row">
                      <!-- Kolom Pertama di Baris Pertama -->
                      <div class="col-md-2">
                        <img src="{{ url("assets/img/user.png") }}" class="card-img-top img-small" alt="Gambar Postingan 1">
                      </div>
                      <!-- Kolom Kedua di Baris Pertama -->
                      <div class="col-md-10">
                        <div class="card-body bg-white">
                          <h5 class="card-title">Nama Pengguna</h5>
                          <p class="card-text"><small class="text-muted">1 jam yang lalu</small></p>
                        </div>
                      </div>
                    </div>
                    <!-- Baris Kedua -->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card-body bg-white">
                          <h5 class="card-title">Kode JavaScript Error</h5>
                          <p class="card-text">Permisi mau tanya, ada yang bisa bantu kenapa kode webpack saya di JavaScript tidak terbaca? ini sudah saya lampirkan screenshoot-nya juga. Terimakasih.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- Baris 2 --}}
              <div class="row">
                <!-- Kolom Pertama -->
                <div class="col-md-4">
                  <div class="card mb-4 border-0 shadow-lg rounded">
                    <div class="row">
                      <!-- Kolom Pertama di Baris Pertama -->
                      <div class="col-md-2">
                        <img src="{{ url("assets/img/user.png") }}" class="card-img-top img-small" alt="Gambar Postingan 1">
                      </div>
                      <!-- Kolom Kedua di Baris Pertama -->
                      <div class="col-md-10">
                        <div class="card-body bg-white">
                          <h5 class="card-title">Nama Pengguna</h5>
                          <p class="card-text"><small class="text-muted">1 jam yang lalu</small></p>
                        </div>
                      </div>
                    </div>
                    <!-- Baris Kedua -->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card-body bg-white">
                          <h5 class="card-title">Kode JavaScript Error</h5>
                          <p class="card-text">Permisi mau tanya, ada yang bisa bantu kenapa kode webpack saya di JavaScript tidak terbaca? ini sudah saya lampirkan screenshoot-nya juga. Terimakasih.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- Kolom 2 --}}
                <!-- Kolom Pertama -->
                <div class="col-md-4">
                  <div class="card mb-4 border-0 shadow-lg rounded">
                    <div class="row">
                      <!-- Kolom Pertama di Baris Pertama -->
                      <div class="col-md-2">
                        <img src="{{ url("assets/img/user.png") }}" class="card-img-top img-small" alt="Gambar Postingan 1">
                      </div>
                      <!-- Kolom Kedua di Baris Pertama -->
                      <div class="col-md-10">
                        <div class="card-body bg-white">
                          <h5 class="card-title">Nama Pengguna</h5>
                          <p class="card-text"><small class="text-muted">1 jam yang lalu</small></p>
                        </div>
                      </div>
                    </div>
                    <!-- Baris Kedua -->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card-body bg-white">
                          <h5 class="card-title">Kode JavaScript Error</h5>
                          <p class="card-text">Permisi mau tanya, ada yang bisa bantu kenapa kode webpack saya di JavaScript tidak terbaca? ini sudah saya lampirkan screenshoot-nya juga. Terimakasih.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- Kolom 3 --}}
                <!-- Kolom Pertama -->
                <div class="col-md-4">
                  <div class="card mb-4 border-0 shadow-lg rounded">
                    <div class="row">
                      <!-- Kolom Pertama di Baris Pertama -->
                      <div class="col-md-2">
                        <img src="{{ url("assets/img/user.png") }}" class="card-img-top img-small" alt="Gambar Postingan 1">
                      </div>
                      <!-- Kolom Kedua di Baris Pertama -->
                      <div class="col-md-10">
                        <div class="card-body bg-white">
                          <h5 class="card-title">Nama Pengguna</h5>
                          <p class="card-text"><small class="text-muted">1 jam yang lalu</small></p>
                        </div>
                      </div>
                    </div>
                    <!-- Baris Kedua -->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card-body bg-white">
                          <h5 class="card-title">Kode JavaScript Error</h5>
                          <p class="card-text">Permisi mau tanya, ada yang bisa bantu kenapa kode webpack saya di JavaScript tidak terbaca? ini sudah saya lampirkan screenshoot-nya juga. Terimakasih.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>                
        </main>
        {{-- FOOTER --}}
        <footer>
          <div class="bg-blue-main">
            Ka
          </div>
        </footer>
        {{-- SCRIPT --}}
        <script>
          window.addEventListener("scroll", function() {
            var navbar = document.querySelector(".navbar");
            navbar.classList.toggle("fixed-top", window.scrollY > 0);
          });
        </script>
    </body>
</html>