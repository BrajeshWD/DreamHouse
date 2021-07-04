<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Hash;
class Customer_controller extends Controller
{
    function index(Request $req){       
        $user=customer::where(['cemail_id'=>$req->email])->first();        
          if(!$user|| ($req->password!=$user->cpassword))
        {
            return "either user name or password not matched";
              
        }
        else{
          $req->session()->put('user', $user);
            return redirect ('welcome');
        }

    }
 
function register(Request $req){ 
    $req->validate([
        'cname'=>'required',
        'cemail_id'=>'required',
        'cpassword'=>'required',
        'ccpassword'=>'required',
        'cmobile'=>'required'
      
    ]); 
$customer= new customer;
$customer->cname=$req->cname;
$customer->cemail_id=$req->cemail_id;
$customer->cpassword=$req->cpassword;
$customer->cmobile=$req->cmobile;
$customer->ccpassword=$req->ccpassword;
$customer->save();
return redirect('login');
    }
    
}

