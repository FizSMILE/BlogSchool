@extends('layouts.main')
@section('isihalaman')
        <!-- Main Content-->
<!-- ======= About Section ======= -->
<div class="hero hero-single route bg-image" style="background-image: url(/assets/img/overlay-bg.jpg)">
  <div class="overlay-mf"></div>
  <div class="hero-content display-table">
    <div class="table-cell">
      <div class="container">
        <h2 class="hero-title mb-4">INFORMASI {{ $user->name }}</h2>
        <ol class="breadcrumb d-flex justify-content-center">
          <li class="breadcrumb-item">
            <a href="/">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">{{ $user->username }}</a>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section id="about" class="about-mf sect-pt4 route ">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="{{ asset('storage/' . $user->avatar) }}" class="img-thumbnail" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Nama: </span> <span>{{ $user->name }}</span></p>
                      <p><span class="title-s">Profile: </span> <span>Mahasiswa</span></p>
                      <p><span class="title-s">Email: </span> <span>{{ $user->email }}</span></p>
                      <p><span class="title-s">Phone: </span> <span>-</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Kategori (Coming soon)</p>
                  <span>Food</span> <span class="pull-right">85%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>Web Design</span> <span class="pull-right">75%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>Travel</span> <span class="pull-right">50%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>Programming</span> <span class="pull-right">90%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left text-black">
                      Tentang saya
                    </h5>
                  </div>
                  <p class="lead">
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id
                    imperdiet et, porttitor
                    at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla
                    porttitor accumsan tincidunt.
                  </p>
                  <p class="lead">
                    Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis
                    porttitor volutpat. Vestibulum
                    ac diam sit amet quam vehicula elementum sed sit amet dui. porttitor at sem.
                  </p>
                  <p class="lead">
                    Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                    Nulla porttitor accumsan
                    tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->
     <!-- ======= Blog Section ======= -->
     <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog {{ $user->name }}
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
        @foreach ($posts as $post)
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="/posts/{{ $post->slug }}"><img src="{{ asset('storage/'. $post->image) }}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">{{ $post->category->name  }}</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
                <p class="card-description">
                  {{ $post->excerpt }}
                  <a class="link-primary text-decoration-none" href="/posts/{{ $post->slug }}">Baca Selengkapnya..</a>
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="/profiles/{{ $post->user->username }}">
                    <img src="{{ asset('storage/' . $post->user->avatar) }}" alt="" class="avatar rounded-circle">
                    <span class="author">{{ $post->user->name }}</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </section>
    <!-- End Blog Section -->
    <!-- Divider-->
    <hr class="my-4" />
    <!-- Pager-->
    <div class="d-flex justify-content-center mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
</div>
</div>
</div>
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
<!-- Footer-->
@endsection
