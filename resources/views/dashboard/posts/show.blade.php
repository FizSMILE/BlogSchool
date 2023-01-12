@extends('dashboard.layouts.main')
@section('container')
<!-- partial -->
<div class="main-panel">
  <div class="blog-wrapper" id="blog">
    <div class="row">
      <div class="col-11 grid-margin">
        <div class="post-box">
          <div class="post-thumb">
            <div class="mb-4">
            <a class="badge badge-outline-success" type="button" href="/dashboard/posts/"> ← Kembali ke semua postingan</a>
            <tr>
              <input type="hidden" class="delete_idS" value="{{ $post->id }}">
              <input type="hidden" class="titleD" value="{{ $post->title }}">
            </tr>
                        {{-- <a class="badge badge-outline-warning" type="button" href="/dashboard/posts/{{ $post->slug }}/edit">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="badge badge-outline-danger bg-transparent btndeleteD" type="button">Hapus</button>
                        </form> --}}
                      </div>
            @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="">
            @else
            <img src="" class="img-fluid" alt="">
            @endif
          </div>
          <div class="post-meta">
            <h1 class="article-title">{{ $post->title }}</h1>
            <ul>
              <li>
                <span class="menu-icons1">
                  <i class="mdi mdi-account"></i>
                </span>
                <a href="#">{{ auth()->user()->name }}</a>
              </li>
              <li>
                <span class="menu-icons2">
                  <i class="mdi mdi-tag"></i>
                </span>
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
              </li>
              <li>
                <span class="menu-icons3">
                <i class="mdi mdi-comment-multiple-outline"></i>
              </span>
                <a href="#">14</a>
              </li>
            </ul>
          </div>
          <div class="article-content">
            {!! $post->body !!}
            <blockquote class="blockquote">
              <p class="mb-0">Perlu Di ingat : </p>
            </blockquote>
            <p>
              KESIMPULAN :
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
 
    @endsection

   