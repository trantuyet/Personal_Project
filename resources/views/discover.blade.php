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
            <li class="nav-item active">
            <a class="nav-link" href="/discover">DISCOVER</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/trending">TRENDING</a>
            </li>
            <li class='nav-item profile'>
            <div class='dropdown'>
      <button type='button' class='btn dropdown-toggle' data-toggle='dropdown'>{{$user}}</button>
      <ul class="dropdown-menu">
    <li><a href="/logout" style='color:black; font-size:13px; padding-left:10px;'>Log out</a></li>
  </ul>
    </div>
            </li>
        </ul>

        <div class="container-fluid">
        <h2>{{$music1[0]->collection_name}}</h2>
    <div class="row">
        @php
        $index = 0;
        @endphp
        @foreach($music1 as $m1)
        @php
        $index = $index + 1;
        @endphp
        <div class='col-lg-2'>
        <div class='card' id='sing'>
        <img class='card-img-top' src={{$m1->song_image}} alt='Card image'>
        <div class='card-img-overlay'>
        <button class='splay' onclick= passIndex({{$index}}) ><i class='fa'>&#xf04b;</i>
        <button class='spause' style='display:none'><i  onclick='pau()'  class='fa'>&#xf04c;</i>
        </div>
        <div class='card-body'>
        <h6>{{$m1->song_name}}</h6>
        </div>
        </div>
        </div>
        @endforeach
    </div>
        </div>

        <div class="container-fluid">
    <h2>{{$music2[0]->collection_name}}</h2>
    <div class='row'>
        @foreach($music2 as $m2)
        <form action='play/{{$m2->p_name}}' method='get' id='{{$m2->p_name}}'>
        @csrf
        <div class='col-lg-2' >
        <div class='card' onclick="fun('{{$m2->p_name}}')">
        <img class='card-img-top' src='{{$m2->Artist_image}}' alt='Card image'>
        <div class='card-body'>
        <h5 class='card-title'>{{$m2->Artist_name}}</h5>
        
        </div>
        </div>
        </div>
        </form>
        @endforeach
    </div>
    </div>

    <div class="container-fluid">
        <h2>{{$music3[0]->collection_name}}</h2>
    <div class="row">
        @php
        $index2 = 0;
        @endphp
        @foreach($music3 as $m3)
        @php
        $index2 = $index2 + 1;
        @endphp
        <div class='col-lg-2'>
        <div class='card' id='sing'>
        <img class='card-img-top' src={{$m3->song_image}} alt='Card image'>
        <div class='card-img-overlay'>
        <button class='splay2' onclick= passIndex2({{$index2}}) ><i class='fa'>&#xf04b;</i>
        <button class='spause2' style='display:none'><i  onclick='pau2()'  class='fa'>&#xf04c;</i>
        </div>
        <div class='card-body'>
        <h6>{{$m3->song_name}}</h6>
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
            var x = <?php echo json_encode($music1); ?>;
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

<script>
        var currentIndex2 = 0;
        var totalIndex2 = 0;
        function passIndex2(z2){
            $('.splay2').css('display','block');
    $('.spause2').css('display','none');
            currentIndex2 = z2-1;
            var i2 = z2-1;
            var x2 = <?php echo json_encode($music3); ?>;
            var songName2 = x2[i2].song_name;
            var songAdd2 = x2[i2].song_address;
            var songImage2 = x2[i2].song_image;
            var artistName2 = x2[i2].Artist_name;
            totalIndex2 = Object.keys(x2).length;

            var g = document.getElementById('player');
        g.setAttribute('src',songAdd2);
        document.getElementById('pl').click();
        document.getElementById('player_title').innerHTML = songName2;
        document.getElementById('player_content').innerHTML = artistName2;
        document.getElementById('player_image').src = songImage2;
        document.getElementById('player_image').style.display = "block";
        document.getElementsByClassName('splay2')[currentIndex2].style.display = "none";
        document.getElementsByClassName('spause2')[currentIndex2].style.display = "block";
        }

        function pau(){
            document.getElementsByClassName('spause2')[currentIndex2].style.display = "none";
            document.getElementsByClassName('splay2')[currentIndex2].style.display = "block";
            document.getElementById('pa').click();
        }

        function forw(){
            if(currentIndex2==totalIndex2-1){
                passIndex2(1);
            }
        else{
            passIndex2(currentIndex2+2);
        }
        }
   function back(){
       if(currentIndex2==0){
           passIndex2(1);
       }
       else{
           passIndex2(currentIndex2);
       }
   }
    </script>
</body>
</html>
@endsection