@extends ('master')
@section ('content') 
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  @foreach ($design as $item)
    <div class="carousel-item {{$item['id']==1 ?'active':''}}" data-bs-interval="10000">
<a href="homeDetail/{{$item['id']}}">
      <img class="d-block w-100" src="{{url('img/'.$item['gallery'])}}" class="d-block w-100"  >
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$item['type']}}</h5>
        <h3>{{$item['price']}}</h3>
        <p>{{$item['description']}}</p>
             </div>
             </a>
    </div>
   @endforeach

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="newTrend">
<h2 class="heading">Latest Design</h2>
  @foreach ($design as $item)
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