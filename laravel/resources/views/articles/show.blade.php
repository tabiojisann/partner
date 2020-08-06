@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="container">

  <div class="div">
    <p>{{ $article->title }}</p>
    <p>{{ $article->text }}</p>
  </div>


  </div>
  @include('footer')
@endsection



