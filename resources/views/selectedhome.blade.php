@extends ('master')
@section ('content') 
<div class="custom-houses">
<div class="col-sm-12">
    <h2 class="heading">Selected Houses</h2>
    <h3><a href="\welcome">Previous</a></h3>
    <div class="wrapper">
    @foreach ($design as $item)
    <div class="row selectedhouses">    
    <div class="col-sm-4">       
            <a href="homeDetail/{{$item->id}}">
              <img class="newTrendImg" src="{{url('img/'.$item->gallery)}}">
            </a>
         </div>  
   <div class="col-sm-4">  
                   <div class="newTrendcaption">
                 <h3>{{$item->name}}</h3>
                 <h3>{{$item->type}}</h3>
                 <h5>{{$item->description}}</h5>        
             </div>                 
            </div>  
    <div class="col-sm-4">
        <a href="removinghome/{{$item->id}}"><button class="btn btn-warning">Remove from Cart</button></a>
        <a href="bookinghome/{{$item->id}}"><button class="btn btn-success">Book Now</button></a>
     </div>      
     </div>  
     @endforeach
     </div>
  </div>
</div>

@endsection