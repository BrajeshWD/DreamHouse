@extends ('master')
@section ('content') <br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img  src="{{url('img/'.$item['gallery'])}}" width=200px height=200px  >
        </div>    
        <div class="col-sm-6">
            <h3><a href="/welcome">Previous</a></h3><br>
            <h2 class="type">Flat type :{{$item['type']}}</h2>
            <h3>Price: {{$item['price']}}</h3>
            <p><b>Feature:</b> {{$item['description']}}</p>
            <br>   
<form action="\addingcart" method="post">
@csrf
<input type="hidden" name="homedesign_id" value="{{$item['id']}}">
           <button class="btn btn-primary">Add to Cart</button>
</form>
            <br>    <br>  
           <a href="\bookinghome/{{$item['id']}}"> <button class="btn btn-success">Book Now</button></a>
        </div>
    </div>
</div>
@endsection