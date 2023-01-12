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
                  <h4 class="mb-4 mx-5 font-weight-normal d-none d-sm-block">Ini Adalah Halaman Membuat Postingan</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
        @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
        @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
  <label for="image" class="form-label">Upload Gambar</label>
  <img class="img-preview img-fluid mb-3 col-sm-5">
  <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
  @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
</div>
      <div class="mb-3">
        <label for="category" class="form-label">Kategori</label>
        <select class="form-select" name="category_id" >
            @foreach ($categories as $category)
            @if(old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
          </select>
      </div>
      <div class="mb-3 ">
        <label for="body" class="form-label">Konten Postingan</label>
        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor>
        @error('body')
        <p class="text-danger">
          {{ $message }}
        </p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Buat Postingan</button>
    </form>
</div>
    </div>
@endsection

