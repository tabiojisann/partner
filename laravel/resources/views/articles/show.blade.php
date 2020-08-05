@extends('app')

@section('title', '記事詳細')

@section('content')

  <div class="container">

  <div class="div">
    <p>{{ $article->title }}</p>
    <p>{{ $article->text }}</p>
  </div>


  </div>
@endsection



