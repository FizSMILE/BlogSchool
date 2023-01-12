@extends('dashboard.layouts.main')
@section('container')
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card corona-gradient-card">
            <div class="card-body py-0 px-0 px-sm-3">
              <div class="row align-items-center">
                
                <div class="col-5 col-sm-7 col-xl-8 p-0">
                  <h2 class="mb-1 mt-4 mx-5 mb-sm-0">Hallo , {{ auth()->user()->name }}</h2>
                  <h4 class="mb-4 mx-5 font-weight-normal d-none d-sm-block">Ini Adalah Halaman Semua Postingan anda</h4>
                </div>
    
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Semua Postingan Anda</h4>
              <div class="col-5 mb-4">
                <a class="nav-link btn btn-success create-new-button" aria-expanded="false" href="/dashboard/posts/create">+ Create New Post</a>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="text-white"># </th>
                      <th class="text-white"> Judul </th>
                      <th class="text-white"> Kategori </th>
                      <th class="text-white"> Aksi </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                    <tr>
                      <input type="hidden" class="delete_id" value="{{ $post->id }}">
                      <input type="hidden" class="titleD" value="{{ $post->title }}">
                        <td> {{ $loop->iteration }}</td>
                        <td><span class="pl-2">{{ $post->title }}</span> </td>
                        <td> {{ $post->category->name }} </td>
                        <td>
                        <a class="badge badge-outline-primary" type="button" href="/dashboard/posts/{{ $post->slug }}">Cek Detail</a>
                        <a class="badge badge-outline-warning" type="button" href="/dashboard/posts/{{ $post->slug }}/edit">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="badge badge-outline-danger bg-transparent btndelete" type="button">Hapus</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Notif Succes --}}
@if (session()->has('successCreate'))
<script type="text/javascript">
window.onload = function(){
  swal("Success", "{{ session('successCreate') }}", "success");
}
</script>
@endif
    </div>
    @endsection