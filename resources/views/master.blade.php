<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <link rel="stylesheet" type="text/css" href="index.css" />
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Home perpustakaan</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand" href="home">Perpustakaan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="buku">Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="member">Member</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="peminjamanbuku">Peminjaman Buku</a>
          </li>
          
        </ul>   
        <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
      </div>
      
    </div>
  </nav>
  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item ">
        <img src={{asset('image/homebook1.jpg')}} alt="Los Angeles" class="d-block" style="height:70vh; width:100%">
      </div>
      <div class="carousel-item">
        <img src={{asset('image/homebook2.jpg')}} alt="Chicago" class="d-block" style="width:100%; height:70vh" >
      </div>
      <div class="carousel-item active">
        <img src={{asset('image/homebook.jpg')}} alt="New York" class="d-block" style="width:100%; height:70vh">
        <div class="carousel-caption d-none d-md-block">
          <h3>Buku Teknologi</h3>
          <h4>Pengantar Teknologi Informasi</h4>
          <button class="btn btn-danger p-3" type="button">View Book</button>
        </div>
      </div>
      

      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
  <div class="container mt-5" style="text-align: center;">
    <h2 style="font-weight: bold;">BUKU -BUKU</h2>
    <div class="carousel-inner py-4">
      <!-- Single item -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <img src="https://th.bing.com/th/id/OIP._DuHfOCvAYUzO5jwEUYbmgHaKl?w=185&h=264&c=7&r=0&o=5&pid=1.7" class=" card-img-top rounded-3" alt="Cinque Terre" width="10" height="200"
                  alt="Waterfall">
                <div class="card-body">
                  <h5 class="card-title">Manajemen Bisnis</h5>
                  <a class="btn btn-dark">See</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <img src="https://th.bing.com/th/id/OIP.fINwVU17sLcF76fRptFT5gHaKl?pid=ImgDet&rs=1" class=" card-img-top rounded-3" alt="Cinque Terre" width="10" height="200"
                  alt="Waterfall">
                <div class="card-body">
                  <h5 class="card-title">Wayang</h5>
                  <a class="btn btn-dark">See</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 d-lg-block">
              <div class="card">
                <img src="https://th.bing.com/th/id/R.f8d17c0f91940336defa001f0677c0ea?rik=gHaiz0zG6O%2fixA&riu=http%3a%2f%2fpenerbitbukudeepublish.com%2fwp-content%2fuploads%2f2017%2f08%2fbuku-SIM-pemanduan-Depan.jpg&ehk=cLS5qi4I9UZUtOiFE3qtEVx1xpSvV9EOBbf8zAnExYo%3d&risl=&pid=ImgRaw&r=0" class=" card-img-top rounded-3" alt="Cinque Terre" width="304" height="200"
                  alt="Waterfall" />
                <div class="card-body">
                  <h5 class="card-title">Wisata</h5>
                  <a class="btn btn-dark">See</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 d-lg-block">
              <div class="card">
                <img src="https://i.pinimg.com/originals/39/86/a4/3986a4448af9741182cbcf6f83861ac7.jpg" class=" card-img-top rounded-3" alt="Cinque Terre" width="100" height="200"
                  alt="Waterfall" />
                <div class="card-body">
                  <h5 class="card-title">UNCHARTED</h5>
                  <a class="btn btn-dark">See</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  



   
 

            @yield('isi')

         

  <div class="container-fluid mt-3" style="padding: 0%; ">
    <footer class=" text-center text-lg-start  " style="background-color: #a7a4a3;">
      <div class="container d-flex justify-content-center py-5">
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
          <i class="fa fa-facebook-f"></i>
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
          <i class="fa fa-youtube"></i>
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
          <i class="fa fa-instagram"></i>
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
          <i class="fa fa-twitter"></i>
        </button>
      </div>

      <!-- Copyright -->
      <div class="text-center text-white p-3" style="background-color: rgba(5, 4, 4, 0.857);">
        © 2020 Copyright
      </div>
      <!-- Copyright -->
    </footer>

  </div>
  <!-- End of .container -->

</body>

</html>