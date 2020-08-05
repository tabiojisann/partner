@extends('app')

@section('title', 'トップページ')

@section('content')

<nav class="navbar nabvar-expand-lg navbar-dark success-color">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  @guest
    <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
    <a class="nav-link" href="{{ route('login') }}">ログイン</a>
  @endguest 

  @auth 
    <a class="nav-link" href="{{ route('articles.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
  @endauth

  @auth 
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    <form id="logout-button" method="POST" action="{{ route('logout') }}"> 
      @csrf 
    </form>
  @endauth 

</nav>

  @foreach($articles as $article)

  @if( Auth::id() === $article->user_id )
          <!-- dropdown -->
          <div class="ml-auto card-text">
            <div class="dropdown">
              <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button type="button" class="btn btn-link text-muted m-0 p-2">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article]) }}">
                  <i class="fas fa-pen mr-1"></i>記事を更新する
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
                  <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                </a>
              </div>
            </div>
          </div>
          <!-- dropdown -->
  
          <!-- modal -->
          <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
                  @csrf
                  @method('DELETE')
                  <div class="modal-body">
                    {{ $article->title }}を削除します。よろしいですか？
                  </div>
                  <div class="modal-footer justify-content-between">
                    <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                    <button type="submit" class="btn btn-danger">削除する</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- modal -->
        @endif
    <div class="div">
      <p>{{ $article->title }}</p>
      <p>{{ $article->text }}</p>
    </div>
  @endforeach


<style>
  .container {
    background-color: #f99;
  }
</style>

 @endsection



