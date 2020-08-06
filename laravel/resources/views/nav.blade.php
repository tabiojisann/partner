<nav class="navbar navbar-dark">
 
  <div class="row">
    <a class="navbar-brand offset-2" href="/">
      <img src="https://s3.amazonaws.com/lg-vectors/bitmaps/206127/721602.png?logo_version=0" width="100" border="0" class="horizontal">
    </a>
  </div>

  @guest
    <div class="row">
      <a href="{{ route('register') }}" class="nav-link ">
        <button type="button" class="btn btn-outline-info waves-effect">
          <span class="text-primary">会員登録</span>
        </button>
      </a>
      <a href="{{ route('login') }}" class="nav-link ">
        <button type="button" class="btn btn-outline-info waves-effect">
          <span class="text-primary">ログイン</span>
        </button>
      </a>
    </div>
  @endguest

  @auth
    <div class="row">
      <a href="{{ route('articles.create') }}" class="nav-link ">
        <button type="button" class="btn btn-outline-default waves-effect">投稿</button>
      </a>
      <button form="logout-button" class="btn btn-flat" type="submit">ログアウト</button>
      <form id="logout-button" method="POST" action="{{ route('logout') }}">
        @csrf
      </form>
    </div>
  @endauth
</nav>