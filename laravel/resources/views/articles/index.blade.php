@extends('app')

@section('title', 'Best Partner')

@section('content')
  @include('nav')
  @auth
    <p>あなたは<span class="text-default">{{ Auth::user()->name }}</span>です</p>
  @endauth
  
  <div class="row blue-grey lighten-5">
    <div class="card border-light col-3 offset-1 mt-5" style="max-height: 440px;">
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


    <div class="col-6 offset-1">
      @foreach($articles as $article)
        <div class="card mt-5">
          <div class="view overlay">
            <img class="card-img-top" src="https://picsum.photos/500/200" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body">
            <h4 class="card-title">タイトル : {{ $article->title }}</h4>
            <p class="card-text">本文 : {{ $article->text }}</p>
          </div>
        </div>
      @endforeach
    </div>


  
  


   



    

    

@endsection




