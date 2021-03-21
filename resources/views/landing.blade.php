<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link href="{{ '/css/landing.css' }}" rel="stylesheet">
    <title>Landing</title>
</head>
<script>
    function checklog(){
        alert('Login First');
    }
</script>
<body>
    @if(!$navDisplay)
<ul id='navBar' class='nav justify-content-end'>
    <li class='nav-item'>
      <a class='nav-link active' href='#'>Home</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' onclick="checklog()">Web player</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' onclick='showSignUp(true)'>Sign up </a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' onclick='showLogIn(true)'>Log in</a>
    </li>
  </ul>
@endif

@if($navDisplay)
<ul id='navBar' class='nav justify-content-end'>
    <li class='nav-item'>
      <a class='nav-link active' href='#'>Home</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='/home'>Web player</a>
    </li>
    <li class='nav-item'>
      <div class='dropdown'>
      <button type='button' class='btn dropdown-toggle' data-toggle='dropdown'>{{$userName}}</button>
      <ul class='dropdown-menu'>
    <li><a href="/logout" style='color:black; font-size:13px; padding-left:10px;'>Log out</a></li>
                </ul>
    </div>
    </li>
  </ul>
@endif

  <div class="signUpModalContainer" id="sign">
    <div class="signUpModal">
      <i onclick="showSignUp(false)" class="fa fa-times-circle"></i>
        <h2 style="text-align: center; letter-spacing: 3px;">Sign Up</h2>
        <hr>
            <form action="/signup" method="POST" onsubmit="return check()" name="signUpForm" enctype="multipart/form-data">
              <!-- <div id="tr"> -->
                  @csrf
                <text id = "popName" data-toggle="popover" >
                  <input type="text" placeholder="Name" name="name"></text><br>

                <text id = "popPhone" data-toggle="popover" >
                  <input type="number" placeholder="phone no" name="phone"></text><br>

                <text id = "popEmail" data-toggle="popover" >
                  <input type="email" placeholder="Email" name="email" required></text><br>

                <text id = "popPass" data-toggle="popover" >
                  <input type="password" placeholder="Password" name="password"></text><br>
                  
                <text id = "popConfPass" data-toggle="popover" >
                  <input type="password" placeholder="Confirm Password" name="confPassword"></text><br>

                  <input type="radio" name="gender" value="male">                
                  <label for="male">Male</label>                
                  <input type="radio" name="gender" value="female">
                  <label for="female">Female</label><br>
                  <input type="checkbox" name="terms"> I accept the Terms and Conditions<br>
                  <button type="submit" name="signUp" id="signUpBtn">Sign Up</button><br>
              <!-- </div> -->
              <!-- <div id="tr2">
                Select Profile Picture : 
                <input type="file" name="profilePic" onchange="update()" name="fileUpload"><br>
                <img id="profilePicDisplay" alt=""><br><br>
                Date Of Birth : <input type="date" name="dob"><br><br>
                <button type="submit" name="signUp" id="signUpBtn">Sign Up</button><br>
              </div> -->
              <p>Already have an account ?<span onclick="switchSL(true)"> Login</span></p>
            </form>
    </div>
  </div>

  <div class="logInModalContainer" id="log">
    <div class="logInModal">
    <i onclick="showLogIn(false)" class="fa fa-times-circle"></i>
      <h2 style="text-align: center; letter-spacing: 3px;">Log In</h2>
      <hr>
      <form action="/login" method="POST">
      @csrf
        <input type="text" name="loginEmail" placeholder="Email"><br>
        <input type="password" name="loginPass" placeholder="Password"><br>
        <p id="forgot">Forgot Password ?</p>
        <button type="submit" onclick="check()" name="logIn">Log In</button><br>
        <p>New User ?<span onclick="switchSL(false)"> Sign Up</span></p>
      </form>
    </div>
  </div>
  @if (session('alert'))
    <script>alert('Email or Password is Wrong')</script>
@endif

<!-- Slider -->
<div class="headContainer">
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
    </ul>
    <div class="carousel-inner">

      <div class="carousel-item active">
      <a href='/play/billie'><img src="{{$slider[0]->slider_image}}" alt="New York"></a>
        <div class="carousel-caption">
          <h1>{{$slider[0]->caption_heading}}</h1>
          <p>{{$slider[0]->caption_content}}</p>
        </div>   
      </div>

    @for($i=1;$i<=4;$i++)
      <div class='carousel-item'>
      <a href='{{$slider[$i]->laravel}}'><img src="{{$slider[$i]->slider_image}}"></a>
      <div class='carousel-caption'>
      <h1>{{$slider[$i]->caption_heading}}</h1>
      <p>{{$slider[$i]->caption_content}}</p>
      </div>
      </div>
    @endfor
      
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  </div>
  
  <div class="main-container">
    <h1>Looking For Music ?</h1>
    @if(!$navDisplay)
      <button type="submit" name="webplayer" onclick="checklog()" class="launchBtn">Launch Web Player</button>
    @endif
    @if($navDisplay)
    <form method='get' action="/home">
      <button type="submit" name="webplayer" class="launchBtn">Launch Web Player</button>
    </form>
    @endif
    
    <div class="container-fluid">
      <h2 style="color: white;">Newly Released</h2>
    <div class="row">
     
    @foreach($landing1 as $l1)
        <div class='col-lg-3'>
        <div class='card' >
        <img class='card-img-top' src="{{$l1->grid_image}}" alt='Card image'>
        <div class='card-body'>
        <h4 class='card-title'>{{$l1->grid_content_title}}</h4>
        <p class='card-text'>{{$l1->grid_content}}</p>
        <a href='{{$l1->laravel}}'><button><i class='fa'>&#xf04b</i></button></a>
        </div>
        </div>
        </div>
    @endforeach
      

    </div>

    <h2 style="color: white;">Popular albums</h2>
    <div class="row">
    @foreach($landing2 as $l2)
        <div class='col-lg-3'>
        <div class='card' >
        <img class='card-img-top' src="{{$l2->grid_image}}" alt='Card image'>
        <div class='card-body'>
        <h4 class='card-title'>{{$l2->grid_content_title}}</h4>
        <p class='card-text'>{{$l2->grid_content}}</p>
        <a href='{{$l2->laravel}}'><button><i class='fa'>&#xf04b</i></button></a>
        </div>
        </div>
        </div>
    @endforeach
    </div>


    </div>
  </div>
  
</body>
<script>
    function showSignUp(x){
    if(x==true){
        document.getElementById("sign").style.display = "block";
    }
    else{
        document.getElementById("sign").style.display = "none";
    }
}
function showLogIn(x){
    if(x==true){
        document.getElementById("log").style.display = "block";
    }
    else{
        document.getElementById("log").style.display = "none";
    }
}
function switchSL(x){
    if(x==true){
        document.getElementById("log").style.display = "block";
        document.getElementById("sign").style.display = "none";
    }
    else{
        document.getElementById("log").style.display = "none";
        document.getElementById("sign").style.display = "block";
    }
}

function check(){
    //var flag = true;
    var name = document.forms['signUpForm']['name'].value;
    var phone = document.forms['signUpForm']['phone'].value;
    var email = document.forms['signUpForm']['email'].value;
    var pass = document.forms['signUpForm']['password'].value;
    var conpass = document.forms['signUpForm']['confPassword'].value;
    var gender = document.forms['signUpForm']['gender'].value;
    var terms = document.forms['signUpForm']['terms'].value;
    
    if(name == ''){    
        document.forms['signUpForm']['name'].focus();
        return false;
    }
    
    else if(!(name.match(/\b^[a-zA-Z ]{5,25}\b/i))){        
        document.forms['signUpForm']['name'].focus();       
        return false;
    }
    else if(phone == ''){        
        document.forms['signUpForm']['phone'].focus();        
        return false;
    }
    else if(Number.isInteger(phone)){        
        document.forms['signUpForm']['phone'].focus();        
        flag = false;
    }
    else if(!(phone.match(/\b[0-9]{10}\b/))){   
        console.log(phone.toString().length);     
        document.forms['signUpForm']['phone'].focus();        
        return false;
    }
    else if(email == ''){       
        document.forms['signUpForm']['email'].focus();        
        return false;
    }
    else if(!(email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))){
        document.forms['signUpForm']['email'].focus();
        return false;
    }
    else if(!(pass.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/))){        
        document.forms['signUpForm']['password'].focus();
        return false;
    }
    else if(pass != conpass){       
        document.forms['signUpForm']['confPassword'].focus();
        return false;
    }
    else if(gender.checked == false){
        document.forms['signUpForm']['gender'].focus();
        return false;
    }
    else if(terms ==""){
        document.forms['signUpForm']['terms'].focus();
        return false;
    }
    
    // if(flag){
    //     $("#tr").slideUp();
    //     $("#tr2").show(1090);
    //     $('#prevForm').show(1090);    
    // }
    
}


</script>
</html>