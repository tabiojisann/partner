@extends('app')

@section('title', 'Best Partner')

@section('content')
<nav class="navbar navbar-dark">


  <a class="navbar-brand col-4" href="/">
    <img src="https://s3.amazonaws.com/lg-vectors/bitmaps/206127/721602.png?logo_version=0" width="70" border="0" class="horizontal">
  </a>
  <div class="row">
    <a href="{{ route('register') }}" class="nav-link ">会員登録</a>
    <a href="{{ route('login') }}" class="nav-link">ログイン</a>
  </div>
</nav>
@endsection
