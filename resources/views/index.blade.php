@extends('master')
@section('content')
<div class="find">
<form action="/find">
   <input class="find-item" type="text"  name="findhome" placeholder="Search Your Dream House">
    <button class="btn-find">Find</button>
</form>
  </div> 
<img src="img/i1.jpg">
@endsection