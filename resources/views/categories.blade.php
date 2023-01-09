@extends('layouts.main')
@section('isihalaman')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Blog School</h1>
                            <span class="subheading">Bermacam - macam informasi sekolah ada disini</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="title-box text-center">
                <h3 class="title-a">
                  Kategori
                </h3>
                <p class="subtitle-a">
                  Kumpulan Kategori
                </p>
                <div class="line-mf"></div>
              </div>
            </div>
          </div>
         
          <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
              <div class="service-box">
                <div class="service-content">
                  <h2 class="s-title">{{ $category->name }}</h2>
                  <p class="s-description text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                    provident vitae! Magni
                    tempora perferendis eum non provident.
                  </p>
                  <div class="col-md-12 text-center">
                    <a class="button button-a button-big button-rouded" href="/categories/{{ $category->slug }}">Cek Kumpulan</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
            
        </div>
      </section><!-- End Services Section -->
  
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-center mb-4"><a class="btn btn-primary text-uppercase" href="/">← HOME</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        @endsection