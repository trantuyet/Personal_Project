@extends('player')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ '/css/play.css' }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Spicy+Rice&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @if($display==1)
<div class='mainContainer' style="background: linear-gradient(to top left, #000000 10%, {{$music[0]->color}} 100%);">
        <div class='jumbotron jumbotron-fluid' style="background: linear-gradient(to bottom, transparent 65%, rgba(0,0,0,0.8)), 
        url('{{ URL::to($music[0]->Artist_cover_image)}}'); height:380px; object-fit:cover; background-size: cover; background-position:0px;">
            <div class='container-fluid'>
                <h1>{{$music[0]->Artist_name}}</h1>
<button onclick='playAll()' style="background-color : {{$music[0]->color}}">PLAY</button>
            </div>
        </div>
        <table>
       @php
        $songsArray=Array();
        $simage = Array();
        $sartist = Array();
        $sname = Array();
        $index = 0;
        @endphp
            @foreach($music as $m)
            @php
        $index = $index + 1;
        @endphp
            <tr class='tableRow'>            
                <td id='td1' class='songBtn'><i  class='fa splay' onclick="passIndex({{$index}},'{{URL::to($m->song_address)}}','{{URL::to($m->Artist_image)}}')">&#xf04b;</i>
                                            <i  onclick='pau()' style='display:none' class='fa spause'>&#xf04c;</i></td>
                <td id='td2'><img src='{{ URL::to($m->Artist_image)}}' alt='Card image'></td>
                <td id='td3' class='songName'><h4>{{$m->song_name}}</h4><p>{{$m->Artist_name}}</p></td>
                <td id='td4' class='songTime'>03.40</td>
            </tr>
            @endforeach
        </table>
        
</div>
@endif

@if($display == 2)
<div class='mainContainer' style="background: linear-gradient(to top left, #000000 10%, {{$cover[0]->color}} 100%);">
        <div class='jumbotron jumbotron-fluid' style="background: linear-gradient(to bottom, transparent 65%, rgba(0,0,0,0.8)), 
        url('{{ URL::to($cover[0]->Playlist_cover_image)}}'); height:380px; object-fit:cover; background-size: cover; background-position:0px;">
            <div class='container-fluid'>
                <h1>{{$music[0]->Artist_name}}</h1>
<button onclick='playAll()' style='background-color : {{$cover[0]->color}}'>PLAY</button>
            </div>
        </div>
        <table>
       @php
        $songsArray=Array();
        $simage = Array();
        $sartist = Array();
        $sname = Array();
        $index = 0;
        @endphp
            @foreach($music as $m)
            @php
        $index = $index + 1;
        @endphp
            <tr class='tableRow'>            
                <td id='td1' class='songBtn'><i  class='fa splay' onclick="passIndex({{$index}},'{{URL::to($m->song_address)}}','{{URL::to($m->Artist_image)}}')">&#xf04b;</i>
                                            <i  onclick='pau()' style='display:none' class='fa spause'>&#xf04c;</i></td>
                <td id='td2'><img src='{{ URL::to($m->Artist_image)}}' alt='Card image'></td>
                <td id='td3' class='songName'><h4>{{$m->song_name}}</h4><p>{{$m->Artist_name}}</p></td>
                <td id='td4' class='songTime'>03.40</td>
            </tr>
            @endforeach
        </table>
        
</div>




@endif

<script>

    
        var currentIndex = 0;
        var totalIndex = 0;
        function autoNext() {
            setInterval(function(){ 
                var u = document.getElementById('player');
                if(u.currentTime == u.duration){
                    forw();
                } 
                }, 3000);
        }

        function playAll(){
            document.getElementsByClassName('splay')[0].click();
        }
        function passIndex(z,songAddress,songImage){
            $('.songName').css('color','white');
            $('.songBtn').css('color','white');
            $('.songTime').css('color','white');
            $('.tableRow').css('background-color','');
            $('.splay').css('display','block');
            $('.spause').css('display','none');
            currentIndex = z-1;
            var i = z-1;
            var x = <?php echo json_encode($music); ?>;
            var songName = x[i].song_name;
            var artistName = x[i].Artist_name;
            totalIndex = Object.keys(x).length;

            var g = document.getElementById('player');
            g.setAttribute('src',songAddress);
            document.getElementById('pl').click();
            document.getElementById('player_title').innerHTML = songName;
            document.getElementById('player_content').innerHTML = artistName;
            document.getElementById('player_image').src = songImage;
            document.getElementsByClassName('songName')[i].style.color = '#41e23e';
            document.getElementsByClassName('songTime')[i].style.color = '#41e23e';
            document.getElementsByClassName('songBtn')[i].style.color = '#41e23e';
            document.getElementsByClassName('tableRow')[i].style.backgroundColor = '#5a5656';
            document.getElementById('player_image').style.display = "block";
            document.getElementsByClassName('splay')[i].style.display = "none";
            document.getElementsByClassName('spause')[i].style.display = "block";
            autoNext();
        }

        function forw(){
            if(currentIndex==totalIndex-1){
                document.getElementsByClassName('splay')[0].click();
            }
            else{
                document.getElementsByClassName('splay')[currentIndex+1].click();
            }
        }
        function pau(){
            document.getElementsByClassName('splay')[currentIndex].style.display = "block";
            document.getElementsByClassName('spause')[currentIndex].style.display = "none";
            document.getElementById('pa').click();
        }
        function back(){
            if(currentIndex==0){
                document.getElementsByClassName('splay')[0].click();
            }
            else{
                document.getElementsByClassName('splay')[currentIndex-1].click();
            }
   }
    </script>

</body>
</html>
@endsection