@extends ('master')
@section ('content') <br><br>
<div class="form-booknow">
<h3>Booking Form</h3>
<form class="row g-3" action="\bookedhome" method="post">
<input type="hidden" name="homedesign_id"   value="{{$design['id']}}">
@csrf
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control address " required name="locality" id="inputAddress"   placeholder="21 A4 Chanda Greens">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" name="city" id="inputCity" placeholder="Mathura" required/>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" name="state" class="form-select" >
      <option selected>Choose...</option>
      <option>U.P</option>
    </select >
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text"name="zip" class="form-control" id="inputZip" placeholder="281001" required/>
  </div>
  <div class="col-12">
     </div>
 
  <div class="col-md-6">
  <label for="inputEmail4" class="form-label"><strong>Booking Amount:</strong></label><br>
    <label for="inputEmail4" class="form-label">Payment Options</label><br>
    <input type="radio" class="dibitcard" name="card" value="debitcard" id="dcard" required/>Through Debit Card</input><br>
    <input type="radio" class="creditcard" name="card" value="creditcard" id="Ccard" required/>Through Credit Card</input>
   </div>
  <div class="col-md-6">
    <label for="inputAmount" class="form-label">amount</label>
    <input type="text" class="form-control" name="bookingAmount" id="inputAmount" value="{{$design['price']}}" required/>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Book</button>   
  </div>
</form>
</div>
<div>
<a href="\welcome"><button type="submit" class="btn btn-warning" id="cancel">Cancel</button></a>
</div>
@endsection