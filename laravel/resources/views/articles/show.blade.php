@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <p>{{ $article->user->name }}</p>
    <div class="container mb-5">
      <div class="row">
        <div class="col-12">
          <div class="card mt-3">
            <div class="card-body pt-0">
              <div class="view overlay">
                @if(isset($article->image))
                  <img class="card-img-top" src="{{ $article->image }}" alt="Card image cap">
                @endif
              </div>
              <h1>{{ $article->title }}</h1>

              <p>{{ $article->text }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  @include('footer')
@endsection



