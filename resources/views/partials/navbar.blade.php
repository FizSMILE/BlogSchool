<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="/">Home BS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
{{-- New Code --}}
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    
    @auth
    <div class="nav-item dropdown ">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ auth()->user()->name }}
      </a>
      <ul class="dropdown-menu">
        <li> <a class="dropdown-item" href="/profiles/{{ auth()->user()->username }}">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> 
          Profile
      </a></li>
        <li> <a class="dropdown-item" href="/dashboard">
          <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
          Dashboard
      </a></li>
        <li> <a class="dropdown-item" href="/">
          <i class="fas fa-house fa-sm fa-fw mr-2 text-gray-400"></i>
          Home
      </a></li>
        <li><hr class="dropdown-divider"></li>
        <li> <a class="dropdown-item" type="button" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
      </a></li>
      </ul>
    </div>
    @else
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon button-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Masuk</a>
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalR">Daftar</a>
      </div>
    </div>
    @endauth
  </div>
</nav>
 
    </div>
  </header><!-- End Header -->