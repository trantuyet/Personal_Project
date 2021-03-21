@extends('player')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Discover</title>
    <link href="{{ '/css/home.css' }}" rel="stylesheet">
</head>
<script>
    function fun(x){
        document.getElementById(x).submit();
    }
</script>
<body>
    <div class="mainContainer" style="background: linear-gradient(to bottom, #000000 -10%, #a76ca0 100%);">
    <ul id="navbar" class="nav justify-content-center">
            <li class="nav-item">
            <a class="nav-link" href="/home">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/discover">DISCOVER</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="/trending">TRENDING</a>
            </li>
            <li class='nav-item profile'>
            <div class='dropdown'>
      <button type='button' class='btn dropdown-toggle' data-toggle='dropdown'>{{$user}}</button>
      <ul class="dropdown-menu">
    <li><a href="/landing" style='color:black; font-size:13px; padding-left:10px;'>Log out</a></li>
  </ul>
    </div>
            </li>
        </ul>


        <div class="container-fluid">
    <h2>{{$music1[0]->collection_name}}</h2>
    <div class='row'>
        @foreach($music1 as $m1)
        <form action='play/{{$m1->p_name}}' method='get' id='{{$m1->p_name}}'>
        @csrf
        <div class='col-lg-2' >
        <div class='card' onclick="fun('{{$m1->p_name}}')">
        <img class='card-img-top' src='{{$m1->Artist_image}}' alt='Card image'>
        <div class='card-body'>
        <h5 class='card-title'>{{$m1->Artist_name}}</h5>
        
        </div>
        </div>
        </div>
        </form>
        @endforeach
    </div>
    </div>

    <div class="container-fluid">
        <h2>{{$music2[0]->collection_name}}</h2>
    <div class="row">
        @php
        $index = 0;
        @endphp
        @foreach($music2 as $m2)
        @php
        $index = $index + 1;
        @endphp
        <div class='col-lg-2'>
        <div class='card' id='sing'>
        <img class='card-img-top' src={{$m2->song_image}} alt='Card image'>
        <div class='card-img-overlay'>
        <button class='splay' onclick= passIndex({{$index}}) ><i class='fa'>&#xf04b;</i>
        <button class='spause' style='display:none'><i  onclick='pau()'  class='fa'>&#xf04c;</i>
        </div>
        <div class='card-body'>
        <h6>{{$m2->song_name}}</h6>
        </div>
        </div>
        </div>
        @endforeach
    </div>
        </div>

</div>
    <script>
        var currentIndex = 0;
        var totalIndex = 0;
        function passIndex(z){
            $('.splay').css('display','block');
    $('.spause').css('display','none');
            currentIndex = z-1;
            var i = z-1;
            var x = <?php echo json_encode($music2); ?>;
            var songName = x[i].song_name;
            var songAdd = x[i].song_address;
            var songImage = x[i].song_image;
            var artistName = x[i].Artist_name;
            totalIndex = Object.keys(x).length;

            var g = document.getElementById('player');
        g.setAttribute('src',songAdd);
        document.getElementById('pl').click();
        document.getElementById('player_title').innerHTML = songName;
        document.getElementById('player_content').innerHTML = artistName;
        document.getElementById('player_image').src = songImage;
        document.getElementById('player_image').style.display = "block";
        document.getElementsByClassName('splay')[i].style.display = "none";
        document.getElementsByClassName('spause')[i].style.display = "block";
        }
        function pau(){
            document.getElementsByClassName('spause')[currentIndex].style.display = "none";
            document.getElementsByClassName('splay')[currentIndex].style.display = "block";
            document.getElementById('pa').click();
        }

        function forw(){
            if(currentIndex==totalIndex-1){
                passIndex(1);
            }
            else{
                passIndex(currentIndex+2);
            }
        }
   function back(){
       if(currentIndex==0){
           passIndex(1);
       }
       else{
           passIndex(currentIndex);
       }
   }
    </script>

</body>
</html>
@endsection