@extends ('master')
@section ('content') 

<div class="newTrend">
<h3><a href="/welcome">Previous</a></h3>
<h2 class="heading">Your Dream House</h2>
  @foreach ($find as $item)
  <a href="homeDetail/{{$item['id']}}">
    <div class="subNewTrend">
      <img class="newTrendImg" src="{{url('img/'.$item['gallery'])}}">
      <div class="newTrendcaption">
        <h3>{{$item['type']}}</h3>
        
              </div>
    </div>
    </a>
   @endforeach

  </div>


@endsection