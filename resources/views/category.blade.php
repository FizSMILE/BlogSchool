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
                Kumpulan Kategori : {{ $category }}
              </h3>
              <p class="subtitle-a">
                Buatlah akun dan cobalah menulis artikel
              </p>
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
                    <h6 class="category">{{ $post->category->name }}</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
                <p class="card-description">
                  {{ $post->excerpt }}
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
                  <span class="bi bi-clock"></span> {{ $post->created_at->diffForHumans() }}
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
                    <div class="d-flex justify-content-center mb-4"><a class="btn btn-primary text-uppercase" href="#!">Postingan Terdahulu →</a></div>
                    <div class="d-flex justify-content-center mb-4"><a class="btn btn-primary text-uppercase" href="/categories">← Kumpulan Kategori</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        @endsection