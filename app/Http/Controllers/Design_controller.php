<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Models\home_design;
use App\Models\add_cart;
use Illuminate\Support\Facades\db;
use App\Models\booked_home;
class Design_controller extends Controller

{
   function welcome(){
      $data=home_design::get();
      return  view('homeDesign',['design'=>$data]);        
   }

   function homeDetail($id){
      $data=home_design::find($id);      
      return view('homeDetail',['item'=>$data]);
   }

   function find(Request $req){
      $data=home_design::where('name','like','%'.$req->input('findhome').'%' )->orwhere('type','like','%'.$req->input('findhome').'%' )->get();
      return view('find',['find'=>$data]);
  }

  function addingcart(Request $req){  
      if($req->session()->has('user'))
         {
            $customer_id=$req->session()->get('user')['id'];
            $cart=new add_cart;
             $cart->customer_id=$customer_id;
            $cart->homedesign_id=$req->homedesign_id;
            $cart->save();
             return redirect('welcome');
          }
      else{
             return redirect('login');
          }
                                    }

   static function countingCart(){
         $customer_id=Session::get('user')['id'];
         return add_cart::where('customer_id',$customer_id)->count();

                                  }

   function seletedhome(){      
          $customer_id=Session::get('user')['id'];
          $data=db::table('add_cart')->join('home_designs','add_cart.homedesign_id','=','home_designs.id')->where('add_cart.customer_id',$customer_id)->select('home_designs.*')->get();
        return view('selectedhome',['design'=>$data]) ;
                         }

   function removinghome($id){
         add_cart::where('homedesign_id',$id)->delete();
         return redirect('seletedhome');
                              }

   function bookinghome($id){
         $data=home_design::where('id',$id)->get()->first();
         return view('bookinghome',['design'=>$data]);
                           }
                           
   function bookedhome(Request $req){
         $booked_home=new booked_home;
         $customer_id=Session::get('user')['id'];
         $booked_home->customer_id= $customer_id;
         $booked_home->homedesign_id=$req->homedesign_id;
         $booked_home->locality=$req->locality;
         $booked_home->city=$req->city;
         $booked_home->state=$req->state;
         $booked_home->zip=$req->zip;
         $booked_home->payment_option=$req->card;
         $booked_home->booking_status="pending";
         $booked_home->bookingAmount=$req->bookingAmount;
         $booked_home->save();
         home_design::where('id',$req->homedesign_id)->delete();
         add_cart::where('homedesign_id',$req->homedesign_id)->delete();
         return redirect('/logout');
                                 }
                                 }
