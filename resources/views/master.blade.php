<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <title>dreamHouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <script type="text/javascript">
   function validate()
    {
                     var name=document.getElementById("exampleInputName");
                     var email=document.getElementById("exampleInputEmail1");
                     var password=document.getElementById("exampleInputPassword1");
                     var cpassword=document.getElementById("exampleInputConfirmPassword1");
                     var mobile=document.getElementById("exampleInputMobile");
                     var regx=/^[7-9][0-9]{9}$/;
                     var regy=/^([a-zA-Z\d\._-]+)@([a-zA-Z\d-]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
                      if(name.value==""){
                         document.getElementById("sname").style.visibility="visible";
                         return false;
                     }  
                     else if(!regy.test(email.value)){
                         document.getElementById("semail").style.visibility="visible";
                         return false;
                     }                 
                     else if(password.value==""){
                         document.getElementById("spassword").style.visibility="visible";
                         return false;
                     }                    
                    
                     else if(password.value.length<6) {                        
                        document.getElementById("spassword").innerHTML="password is too short";
                        document.getElementById("spassword").style.visibility="visible";
                        return false;
                     }
                     else if(cpassword.value==""){
                         document.getElementById("scpassword").style.visibility="visible";
                         return false;
                     }
                     else if(cpassword.value!=password.value){
                        document.getElementById("scpassword").innerHTML="Password and Confirm Password not matched";
                         document.getElementById("scpassword").style.visibility="visible";
                         return false;
                     }
                     else if(!regx.test(mobile.value)){
                         document.getElementById("smobile").style.visibility="visible";
                         return false;
                     }
                    
                  
                  
    }
</script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')     
   <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<style>
*{
    box-sizing: border-box;
}

html{
    scroll-behavior: smooth;
    height:min-content;
    box-sizing: border-box;
}
body{
    background:radial-gradient(rgb(179, 179, 240),rgb(255,255, 255));
}
.header{
    background:linear-gradient(rgb(13, 13, 247),rgb(2, 7, 48));
}
.nav-link{
    color:white;
    font-weight: bolder;

}
.custom-login{
    height: 50px;
    padding-top:10px;
}
.btn-group{
  clear: both;
       }
    #carouselExampleInterval{
        height:400px;
        width:80%;
        align-items: center;
        margin-left:100px;
        background-color:rgb(243, 126, 126);
    }  
 
    img.d-block {
        height:400px;
        width:50%;
    }

 img.newTrendImg{
     height:150px;
     width:150px; 
     border: 2px solid blue; 
     border-radius:5%;  
 }
 .subNewTrend{
     float:left;
     margin:10px;
 }
 .heading{
    color:red;
}
h2.type{
    color:red;
}
.btn-find{
    background-color:red;
    border-radius:10%;
    margin-left:5px;
}
.find{
   margin-bottom:5px;
   margin-left:1000px;
}
.find-item{
    width: 200px;
}
.selectedhouses{
    border-bottom:1px dotted #cccc;
    margin-bottom:10px;
    padding:10px;
}
.form-booknow{
    border:1px dotted blue;
    padding:10px;
}
.form-booknow h3{
    border:1px solid red;
    padding:10px;
    color:red;
    width:250px;
}
.form-control address{
    width: 100px;
color:red;
}
debitcard{
padding:10px;
}
creditcard{
padding:10px;
.btn-primary{
    padding:10px;
}
}
#cancel{
margin:10px;
}
.customer-form{
    padding:10px;
    margin-left:200px;
    border:1px solid rgb(52, 52, 121);
    border-radius:10px;
    background-color:rgba(234, 252, 252, 0.8);
    width:60%;
}
.register h3{
    margin-left:200px;
    width: 360px;
    padding-bottom:5px;
    background-color:#cccc;
}
.logout{
    text-decoration:none;
   padding-left:50px;
   font-weight: bolder;  
}


</style>
</html>