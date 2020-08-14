@extends('app')

@section('title', 'マイページ')

@section('content')
  @include('nav')
    <div class="container mt-5 mb-5 " style="max-width: 100%;">
      @if( Auth::id() === $user->id )
        <a href="{{ route('users.edit', ['user' => $user]) }}" class="btn btn-primary">編集</a>
      @endif
      <div class="row">


        <div class="col-5 offset-1">
          <div class="view overlay">
            @if(isset($user->image))
              <img class="card-img-top" src="{{ $user->image }}" alt="">
            @endif
            <div class="mask rgba-white-slight"></div>
          </div>
        </div>

        <div class="col-4 offset-1">

          <div class="name pb-5">
            <h1>{{ $user->name }}</h1>
            <p>{{ $user->name }}</p>
          </div>

          <table class="table">
            <thead>

              <tr>
                <th style="width:30%" >生年月日</th>
                <th >{{ $user->birthday->format('Y年 n月 j日') }}</th>
              </tr>

              <tr>
                <th style="width:30%" >性別</th>
                <th >{{ $user->sex }}</th>
              </tr>

              <tr>
                <th style="width:30%" >出身地</th>
                <th >{{ $user->birthplace }}</th>
              </tr>

              <tr>
                <th style="width:30%" >身長</th>
                <th>
                  <?php 
                    if(!empty($user->height)) {
                      echo  $user->height . ' ' . 'cm';
                    }
                  ?>
                </th>
              </tr>

              <tr>
                <th style="width:30%" >体重</th>
                <th>
                  <?php 
                    if(!empty($user->weight)) {
                      echo  $user->weight . ' ' . 'kg';
                    }
                  ?>
                </th>
              </tr>

              <tr>
                <th style="width:30%" >趣味</th>
                <th >{{ $user->hobby }}</th>
              </tr>

              <tr>
                <th style="width:30%" >特技、資格</th>
                <th >{{ $user->skill }}</th>
              </tr>

              <tr>
                <th style="width:30%" >学歴</th>
                <th >{{ $user->background }}</th>
              </tr>

              <tr>
                <th style="width:35%" >影響を受けた人物</th>
                <th >{{ $user->influence }}</th>
              </tr>

              <tr>
                <th style="width:35%" >youtubeチャンネル</th>
                <th >{{ $user->youtube }}</th>
              </tr>
              <tr>
                <th style="width:35%" >ツイッター</th>
                <th >{{ $user->twitter }}</th>
              </tr>
              <tr>
                <th style="width:35%" >ブログ</th>
                <th >{{ $user->blog }}</th>
              </tr>

            </thead>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="col-8 offset-2 mt-5">
          <div class="card">
            <div class="card-body">
              <div class="card-text">
                {!! nl2br(e($user->PR)) !!}
              </div>
            </div>
          </div>
        </div>
      </div>

    </div> 
  @include('footer')
@endsection








