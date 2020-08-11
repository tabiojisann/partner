@extends('app')

@section('title', 'Best Partner')

@section('content')
  @include('nav')
  @auth
    <p class="ml-auto">あなたは<span class="text-default">{{ $user->name }}</span>です</p>
    <a href="{{ route('users.show', ['user' => $user]) }}">{{ $user->name }}</a>
  @endauth
  <div class="row blue-grey lighten-5">
    <div class="card border-light col-3 offset-1 my-5" style="max-height: 440px;">
      <p class="card-header">検索</p>
      <div class="card-body">
        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios">
          <label class="custom-control-label" for="defaultGroupExample1">Option 1</label>
        </div>

        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" checked>
          <label class="custom-control-label" for="defaultGroupExample2">Option 2</label>
        </div>

       
        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios">
          <label class="custom-control-label" for="defaultGroupExample3">Option 3</label>
        </div>

        <form class="form-inline mr-auto mt-5">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn blue-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
        </form>
      </div>
    </div>

    <div class="col-6 offset-1 pb-5">
      @foreach($articles as $article)
        <div class="card mt-5">


          <div class="view overlay">
            @if(isset($article->image))
              <img class="card-img-top" src="{{ $article->image }}" alt="Card image cap">
            @endif
            <a href="{{ route('articles.show', ['article' => $article]) }}">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <div class="card-body">

            <h3 class="card-title">{{ $article->title }}</h3>

            <table class="table  table-bordered table-hover">
              <tr>
                <th class=>ポジション</th>
                <th>{{ $article->position }}</th>
              </tr>
              <tr>
                <th class="">スタイル</th>
                <th>{{ $article->style }}</th>
              </tr>
            </table>

            <p class="card-text">{{ $article->text }}</p>

              @if( Auth::id() === $article->user_id )
                <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">削除</button>
                </form>
                <a href="{{ route('articles.edit', ['article' => $article]) }}" class="btn btn-primary">編集</a>

              @endif

          </div>
        </div>
      @endforeach
    </div>
  </div>

  @include('footer')



@endsection




