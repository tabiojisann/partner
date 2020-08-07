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
                <img class="card-img-top" src="https://picsum.photos/500/200" alt="Card image cap">
                  <a href="{{ route('articles.show', ['article' => $article]) }}">
                    <div class="mask rgba-white-slight"></div>
                  </a>
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



