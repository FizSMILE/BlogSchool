@extends('layouts.main')
@section('isihalaman')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>BLOGGER SEKOLAH</h1>
                            <span class="hero-subtitle"><span class="typed" data-typed-items="Bermacam - macam informasi tentang sekolah ada disini"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <p class="subtitle-a">
                Buatlah akun dan cobalah menulis artikel
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-5">
          <div class="col-md-6">
            <form action="/">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search.." aria-label="Recipient's username" aria-describedby="button-addon2" name="search" value="{{ request('search') }}">
              <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </div>
          </form>
          </div>
        </div>
        <div class="row">
          @if (count($posts) > 0)
        @foreach ($posts as $post)
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="/posts/{{ $post->slug }}">
                  <img src="{{ asset('storage/'. $post->image) }}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">{{ $post->category->name  }}</h6>
                  </div>
                </div>
                <h3 class="card-title"><a class="card-ta" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
                <p class="card-description">
                  {{ $post->excerpt }}
                  <a class="link-primary text-decoration-none" href="/posts/{{ $post->slug }}">Baca Selengkapnya..</a>
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a class="author-a" href="/profiles/{{ $post->user->username }}">
                    <img src="{{ asset('storage/' . $post->user->avatar) }}" alt="" class="avatar rounded-circle">
                    <span class="author-t">{{ $post->user->name }}</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock-fill"></span> {{ $post->created_at->diffForHumans() }}
                </div>
              </div>
            </div>
          </div>
        @endforeach
        @else
        <h3 class="title-a text-center">
          Tidak ada artikel cobalah menulis artikel
        </h3>
        @endif
        </div>
      </div>
    </section>
    <!-- End Blog Section -->


 <!-- Modal Login -->
<div class="modal fade" id="exampleModal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content ">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Masuk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="mb-4 mt-0 text-secondary">Silahkan masukkan email dan password anda!</p>
        <form action="/login" method="post">
          @csrf
        <div class="form-outline form-white mb-4">
          <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg  " required autofocus />
          <label class="form-label text-secondary" for="typeEmailX">Email</label>
        </div>
        <div class="form-outline form-white mb-4">
          <input type="password" name="password"  id="typePasswordX" class="form-control form-control-lg" required />
          <label class="form-label text-secondary" for="typePasswordX">Password</label>
        </div>
        <div>
          <p class="mb-0 text-secondary">Tidak punya akun? <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModalR" class="text-primary-50 fw-bold">Daftar</a>
          </p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Masuk</button>
      </div>
    </form>
    </div>
  </div>
</div>


{{-- Modal Regis --}}
  <div class="modal fade" id="exampleModalR" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content ">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Daftar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="mb-4 mt-0 text-secondary">Silahkan masukkan email dan password anda!</p>
          <form action="/register" method="POST" enctype="multipart/form-data" >
            @csrf
          <div class="form-outline form-white mb-4">
            
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror form-control-lg" required value="{{ old('name') }}" />
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <label class="form-label text-secondary" for="typeNameX">Nama</label>
            {{-- Notif If error --}}
@error('name')
<script type="text/javascript">
window.onload = function(){
  swal("Error", "{{ $message }}", "error");
}
</script>
@enderror
          </div>
          <div class="form-outline form-white mb-4">
            <input type="username" id="username" name="username" class="form-control @error('username') is-invalid @enderror form-control-lg" required value="{{ old('username') }}" />
            @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <label class="form-label text-secondary" for="typeUsernameX">Username</label>
            {{-- Notif If error --}}
@error('username')
<script type="text/javascript">
window.onload = function(){
  swal("Error", "{{ $message }}", "error");
}
</script>
@enderror
          </div>
          <div class="form-outline form-white mb-4">
            <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" required  />
            <label class="form-label text-secondary" for="typeEmailX">Email</label>
            {{-- Notif If error --}}
@error('email')
<script type="text/javascript">
window.onload = function(){
  swal("Error", "{{ $message }}", "error");
}
</script>
@enderror
          </div>
          <div class="form-outline form-white mb-4">
            <input type="password" id="typePasswordX" name="password" class="form-control @error('password') is-invalid @enderror form-control-lg" required  />
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <label class="form-label text-secondary" for="typePasswordX">Password</label>
            {{-- Notif If error --}}
@error('password')
<script type="text/javascript">
window.onload = function(){
  swal("Error", "{{ $message }}", "error");
}
</script>
@enderror
          </div>
          <div class="mb-3">
            <input class="form-control @error('avatar') is-invalid @enderror " type="file" id="avatar" name="avatar" onchange="previewImage()">
            <img class="img-preview img-fluid mt-2 col-sm-3 d-block rounded-circle">
            @error('avatar')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <label for="avatar" class="form-label text-secondary -mt-4">Unggah avatar</label>
          </div>
          
          <div>
            <p class="mb-0 text-secondary">Sudah mempunyai akun? <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-primary-50 fw-bold">Masuk</a>
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" id="submit" class="btn btn-primary" >Daftar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  {{-- End Modal Register --}}

  {{-- Notif Succes --}}
  @if (session()->has('success'))
  <script type="text/javascript">
  window.onload = function(){
    swal("Success", "{{ session('success') }}", "success");
  }
</script>
  @endif
  {{-- Notif Failed login --}}
  @if (session()->has('loginError'))
  <script type="text/javascript">
  window.onload = function(){
    swal("Failed", "{{ session('loginError') }}", "error");
  }
</script>
  @endif
{{-- Modal Logout --}}
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-black" id="exampleModalLabel">Yakin Untuk Keluar?</h5>
        </div>
        <div class="modal-body">Apakah yakin untuk keluar?</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
            <form action="/logout" method="post">
              @csrf
              <button class="btn btn-danger" type="submit">Keluar</button>
            </form>
        </div>
    </div>
</div>
</div>

 
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-center mb-4">{{ $posts->links() }}</div>
                    <div class="d-flex justify-content-center mb-4"><a class="btn btn-primary text-uppercase" href="/categories">Kumpulan Kategori →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        @endsection