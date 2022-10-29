@extends('layouts.layout')

@section('content')
<div class="main">
    <div class="jumbotron"></div>
    <section class="cards-section">
      <div class="badge">Current Series</div>
      <div class="grid">
        {{-- <image-and-text
          class="component"
          v-for="(item, index) in items"
          :key="index"
          :img="item.thumb"
          :localImg="false"
          :text="item.series"
          :square="true"
          size="200px"
        /> --}}
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
