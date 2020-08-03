@extends('app')

@section('title', 'トップページ')

@section('content')

<h1>Hello World!!</h1>



  @foreach($articles as $article)
    <div class="div">
      <p>{{ $article->title }}</p>
      <p>{{ $article->text }}</p>
    </div>
  @endforeach


  @endsection

<style>

h1 {
  text-align: center; 
  margin-top: 200px; 
}

.div {
  height: 150px;
  width: 100%; 
  background-color: gray;
}

</style>



