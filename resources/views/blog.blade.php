@extends('layouts.main')

<div class="hero hero-single route bg-image" style="background-image: url(/assets/img/overlay-bg.jpg)">
  <div class="overlay-mf"></div>
  <div class="hero-content display-table">
    <div class="table-cell">
      <div class="container">
        <h2 class="hero-title mb-4">INFORMASI DETAIL</h2>
        <ol class="breadcrumb d-flex justify-content-center">
          <li class="breadcrumb-item">
            <a href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">{{ $post->slug }}</a>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>
@section('isihalaman')
<main id="main">
<!-- ======= Blog Single Section ======= -->
<section class="blog-wrapper sect-pt4" id="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="post-box">
          <div class="post-thumb">
            <img src="{{ asset('storage/'. $post->image)  }}" class="img-fluid" alt="">
          </div>
          <div class="post-meta">
            <h1 class="article-title">{{ $post->title }}</h1>
            <ul>
              <li>
                <span class="fa-regular fa-user"></span> 
                <a href="#">{{ $post->user->name }}</a>
              </li>
              <li>
                <span class="fa-sharp fa-solid fa-tags"></span> 
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
              </li>
              <li>
                <span class="fa-regular fa-comments"></span>
                <a href="#">14</a>
              </li>
            </ul>
          </div>
          <div class="article-content">
            {!! $post->body !!}
            <blockquote class="blockquote">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            </blockquote>
            <p>
              Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris blandit
              aliquet elit, eget tincidunt
              nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Donec sollicitudin molestie malesuada.
            </p>
          </div>
        </div>
        <div class="box-comments">
          <div class="title-box-2">
            <h4 class="title-comments title-left">Comments (34)</h4>
          </div>
          <ul class="list-comments">
            <li>
              <div class="comment-avatar">
                <img src="/assets/img/testimonial-2.jpg" alt="">
              </div>
              <div class="comment-details">
                <h4 class="comment-author">Oliver Colmenares</h4>
                <span>18 Sep 2017</span>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                  ipsam temporibus maiores
                  quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                </p>
                <a href="3">Reply</a>
              </div>
            </li>
            <li>
              <div class="comment-avatar">
                <img src="/assets/img/testimonial-4.jpg" alt="">
              </div>
              <div class="comment-details">
                <h4 class="comment-author">Carmen Vegas</h4>
                <span>18 Sep 2017</span>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                  ipsam temporibus maiores
                  quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis,
                  veritatis deserunt.
                </p>
                <a href="3">Reply</a>
              </div>
            </li>
            <li class="comment-children">
              <div class="comment-avatar">
                <img src="/assets/img/testimonial-2.jpg" alt="">
              </div>
              <div class="comment-details">
                <h4 class="comment-author">Oliver Colmenares</h4>
                <span>18 Sep 2017</span>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                  ipsam temporibus maiores
                  quae.
                </p>
                <a href="3">Reply</a>
              </div>
            </li>
            <li>
              <div class="comment-avatar">
                <img src="/assets/img/testimonial-2.jpg" alt="">
              </div>
              <div class="comment-details">
                <h4 class="comment-author">Oliver Colmenares</h4>
                <span>18 Sep 2017</span>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                  ipsam temporibus maiores
                  quae natus libero optio.
                </p>
                <a href="3">Reply</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="form-comments">
          <div class="title-box-2">
            <h3 class="title-left">
              Leave a Reply
            </h3>
          </div>
          <form class="form-mf">
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <input type="text" class="form-control input-mf" id="inputName" placeholder="Name *" required>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <input type="email" class="form-control input-mf" id="inputEmail1" placeholder="Email *" required>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="form-group">
                  <input type="url" class="form-control input-mf" id="inputUrl" placeholder="Website">
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="form-group">
                  <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <div class="widget-sidebar sidebar-search">
          <h5 class="sidebar-title">Search</h5>
          <div class="sidebar-content">
            <form>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary btn-search" type="button">
                    <span class="fa-solid fa-magnifying-glass"></span>
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <div class="widget-sidebar">
          <h5 class="sidebar-title">Recent Post</h5>
          <div class="sidebar-content">
            <ul class="list-sidebar">
              <li>
                <a href="#">Atque placeat maiores.</a>
              </li>
              <li>
                <a href="#">Lorem ipsum dolor sit amet consectetur</a>
              </li>
              <li>
                <a href="#">Nam quo autem exercitationem.</a>
              </li>
              <li>
                <a href="#">Atque placeat maiores nam quo autem</a>
              </li>
              <li>
                <a href="#">Nam quo autem exercitationem.</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="widget-sidebar">
          <h5 class="sidebar-title">Archives</h5>
          <div class="sidebar-content">
            <ul class="list-sidebar">
              <li>
                <a href="#">September, 2017.</a>
              </li>
              <li>
                <a href="#">April, 2017.</a>
              </li>
              <li>
                <a href="#">Nam quo autem exercitationem.</a>
              </li>
              <li>
                <a href="#">Atque placeat maiores nam quo autem</a>
              </li>
              <li>
                <a href="#">Nam quo autem exercitationem.</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="widget-sidebar widget-tags">
          <h5 class="sidebar-title">Tags</h5>
          <div class="sidebar-content">
            <ul>
              <li>
                <a href="#">Web.</a>
              </li>
              <li>
                <a href="#">Design.</a>
              </li>
              <li>
                <a href="#">Travel.</a>
              </li>
              <li>
                <a href="#">Photoshop</a>
              </li>
              <li>
                <a href="#">Corel Draw</a>
              </li>
              <li>
                <a href="#">JavaScript</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Blog Single Section -->

</main><!-- End #main -->
 <!-- Modal Login -->
 <div class="modal fade" id="exampleModal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Login</h1>
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
          <p class="mb-0 text-secondary">Tidak punya akun? <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModalR" class="text-primary-50 fw-bold">Register</a>
          </p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>


{{-- Modal Regis --}}
  <div class="modal fade" id="exampleModalR" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Register</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="mb-4 mt-0 text-secondary">Silahkan masukkan email dan password anda!</p>
          <form action="/register" method="POST">
            @csrf
          <div class="form-outline form-white mb-4">
            
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror form-control-lg" required value="{{ old('name') }}" />
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <label class="form-label text-secondary" for="typeNameX">Name</label>
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
          
          <div>
            <p class="mb-0 text-secondary">Sudah mempunyai akun? <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-primary-50 fw-bold">Login</a>
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="submit" class="btn btn-primary" >Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>

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
            <h5 class="modal-title text-black" id="exampleModalLabel">Ready to Leave?</h5>
        </div>
        <div class="modal-body">Apakah yakin untuk logout?</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
            <form action="/logout" method="post">
              @csrf
              <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        </div>
    </div>
</div>
</div>
        @endsection