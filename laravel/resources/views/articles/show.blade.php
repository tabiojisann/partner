@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')

    <div class="container mb-5">
      <div class="row" >
        <div class="col-12">
          <div class="card mt-3">
            <div class="card-body pt-0">
              <div class="article-user mt-3">
                <img src="{{ $article->user->image }}" class="d-inline rounded-circle" width="50" height="45" alt="">
                <b>{{ $article->user->name}}</b>
              </div>
              
              <div class="row">
                <div class="col-6 mt-3 ">
                  <h1 class="text-center">{!! nl2br(e($article->title)) !!}</h1>
                  <p  class="mt-4">{!! nl2br(e($article->text))!!}</p>
                </div>
                <div class="view overlay col-5 offset-1  mt-3" >
                  @if(isset($article->image))
                    <img class="card-img-top" src="{{ $article->image }}"  alt="photo">
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @include('footer')
@endsection



