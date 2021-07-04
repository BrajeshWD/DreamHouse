<?php 
use App\Http\Controllers\Design_controller;
$cartItems=0; 
if(Session::has('user'))
{
  $customer_name=Session::get('user')['cname'];
$cartItems=Design_controller::countingCart();
}
?>
<div class="header">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="aboutUs">About Us</a>
  </li> 
    <li class="nav-item">
    <a class="nav-link " tabindex="-1" aria-disabled="false" href="contactUs">Contact Us</a>
  </li>
  @if(Session::has('user'))
  <li class="nav-item">
    <a class="nav-link " href="/seletedhome" tabindex="-1" >HomeList:{{$cartItems}}</a>
  </li>
 <li class="nav-item">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         <span class="caret"> {{$customer_name}}<span>
     </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="logout" href="/logout">Logout</a></li>
          </ul>
  </li>
         @else
         <li class="nav-item-logout">
     <a class="nav-link dropdown-toggle" href="login" id="navbarDropdownMenuLink" >
          login
     </a>          
  </li>   
      
       
    @endif
<li class="nav-item">
@if(!Session::has('user'))
    <a class="nav-link " href="\registration" tabindex="-1" aria-disabled="false">New Customer</a>
  @endif
  </li>
  </ul>

  </div>