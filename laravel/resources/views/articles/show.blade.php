@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <p>{{ $article->user->name }}</p>
    <div class="container mb-5">
      <div class="row">
        <div class="col-12">
          <div class="card mt-3">
            <div class="card-body pt-0">
            </div>
          </div>
        </div>
      </div>
    </div>
      

  @include('footer')
@endsection



