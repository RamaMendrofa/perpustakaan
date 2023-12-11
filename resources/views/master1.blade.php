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
      <a class="navbar-brand" href="home" >Perpustakaan</a>
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
          <li class="nav-item">
            <a class="nav-link" href="admin">Admin</a>
          </li>

        </ul>
        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} </a>
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
      </div>
    </div>
  </nav>
  

            @yield('isi')


            

  <div class="container-fluid mt-5" style="padding: 0%; ">
    <footer class=" text-center text-lg-start fixed-bottom " style="background-color: #a7a4a3;">
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