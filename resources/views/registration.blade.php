@extends('master')
@section('content')
<div class="register">
<h3>Customer Registration Form</h3><br>
<div class="customer-form">
<form  action="register" method="post" onsubmit="return validate()">
@csrf
<div class="mb-3">
    <label for="exampleInputName" class="form-label">Customer Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="cname" value="{{old('cname')}}" placeholder="enter your Name"> 
    <span style="color:red">@error('cname'){{$message}}@enderror</span>
    <span id="sname" style="color:red; visibility:hidden">Invalid Input</span>
         </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="cemail_id" id="exampleInputEmail1" value="{{old('cemail_id')}}" aria-describedby="emailHelp" placeholder="enter your Email Address">
    <span style="color:red">@error('cemail_id'){{$message}}@enderror</span>
    <span id="semail" style="color:red; visibility:hidden">Invalid Input</span>
     <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1" value="{{old('cpassword')}}"placeholder="enter your Password">
    <span style="color:red">@error('cpassword'){{$message}}@enderror</span>
    <span id="spassword" style="color:red; visibility:hidden">Invalid Input</span>
  </div>
  <div class="mb-3">
    <label for="exampleInputConfirmPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="ccpassword" id="exampleInputConfirmPassword1" value="{{old('ccpassword')}}" placeholder="enter your Confirm Password">
    <span style="color:red">@error('ccpassword'){{$message}}@enderror</span>
    <span id="scpassword" style="color:red; visibility:hidden">Invalid Input</span>
  </div> 
  <div class="mb-3">
    <label for="exampleInputMobile" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" id="exampleInputMobile" name="cmobile" value="{{old('cmobile')}}" aria-describedby="emailHelp" placeholder="enter your Mobile">    
    <span style="color:red">@error('cmobile'){{$message}}@enderror</span>
    <span id="smobile" style="color:red; visibility:hidden">Invalid Input</span>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection