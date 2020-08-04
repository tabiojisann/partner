@extends('app')

@section('title', 'トップページ')

@section('content')

<nav class="navbar nabvar-expand-lg navbar-dark success-color">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  @if (Route::has('login'))
      <div class="top-right links">
          @auth
              <a href="{{ url('/home') }}">Home</a>
          @else
              <a href="{{ route('login') }}">Login</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}">Register</a>
              @endif
          @endauth
      </div>
  @endif

</nav>

  <!-- @foreach($articles as $article)
    <div class="div">
      <p>{{ $article->title }}</p>
      <p>{{ $article->text }}</p>
    </div>
  @endforeach -->


<style>
  .container {
    background-color: #f99;
  }
</style>

 @endsection



