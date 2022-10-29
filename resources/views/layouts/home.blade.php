@extends('layouts.layout')

@section('content')
<div class="main">
    <section class="cards-section">
      <div class="badge">Current Series</div>
      <div class="grid">
        @foreach ($comics as $comic)
            <div class="comic">
                <img src="{{$comic['thumb']}}" alt="" srcset="">
                <p>{{$comic['title'] }}</p>
            </div>
        @endforeach
      </div>
    </section>
    <div class="more">
        <button>LOAD MORE</button>
    </div>
  </div>
@endsection
