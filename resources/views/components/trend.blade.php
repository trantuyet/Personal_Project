<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" text="text/css" href='player.css' /> -->
    <script src="home.js"></script>
    <link href="{{ '/css/player.css' }}" rel="stylesheet">
    <title>Home</title>
</head>
<body>
<audio id="player">
    <source src="./Assets/webPlayerAssets/songs/Anne-Marie - 2002.mp3" type="audio/ogg">
</audio>
<div class="playerContainer">
    <img id="player_image" src="" alt='player_image'>
    <p id="player_title"></p>
    <p id="player_content"></p>
    <p id="current_time">00:00</p>
    <p id="total_time">00:00</p>
    <button class="play" id="pl" onclick="clickP(true)"><i style="font-size:18px; text-align:center"
                                                           class="fa">&#xf04b;</i></button>
    <button class="pause" id="pa" onclick="clickP(false)"><i style="font-size:18px; text-align:center" class="fa">&#xf04c;</i>
    </button>
    <button type="button" id="forw" onclick="forw()" name="button"><i class="fa fa-forward"></i></button>
    <button type="button" id="back" onclick="back()" name="button"><i class="fa fa-backward"></i></button>
    <input class="seek" type="range" min="0" max="100" value="0" name="progress" id="seek"/>
    <button type="button" class="v1" id="v11" onclick="mute(true)" name="button"><i style="font-size:15px" class="fa">&#xf028;</i>
    </button>
    <button type="button" class="v2" id="v22" onclick="mute(false)" name="button"><i><span class="iconify"
                                                                                           data-icon="fa-solid:volume-slash"
                                                                                           data-inline="false"></span></i>
    </button>
    <input class="vol" id="volumeControl" type="range" min="0" max="100" value="50"/>
</div>

</body>
<script>
    var x = document.getElementById('player');
    var y = document.getElementById('seek');
    var z = document.getElementById("volumeControl");
    x.addEventListener("timeupdate", function () {
        y.max = x.duration;
        y.value = (parseInt(x.currentTime)) + 0.01;
        y.style.background = 'linear-gradient(to right, #82CFD0 0%, #4CAF50 ' + ((y.value) * 100) / y.max + '%, #fff ' + ((y.value) * 100) / y.max + '%, white 100%)';
        var currentMinute, CurrentSecond, totalMinutes, totalSeconds;
        currentMinute = Math.floor((x.currentTime / 60));
        totalMinutes = Math.floor((x.duration / 60));
        CurrentSecond = Math.floor((x.currentTime % 60));
        totalSeconds = Math.floor((x.duration % 60));
        if (CurrentSecond < 10) {
            CurrentSecond = '0' + CurrentSecond;
        }
        if (totalMinutes < 10) {
            totalMinutes = '0' + totalMinutes;
        }
        if (currentMinute < 10) {
            currentMinute = '0' + currentMinute;
        }
        var curT = currentMinute + ":" + CurrentSecond;
        var totalT = totalMinutes + ":" + totalSeconds;
        document.getElementById('current_time').innerHTML = curT;
        document.getElementById('total_time').innerHTML = totalT;
    });
    y.oninput = function () {
        var t = parseInt(this.value);
        x.currentTime = t;
    }
    z.oninput = function () {
        var t = this.value;
        x.volume = t / 100;
    }

    let show = false;

    function clickP(x) {
        if (x) {
            document.getElementById("pl").style.display = "none";
            document.getElementById("pa").style.display = 'block';
            document.getElementById('player').play();
        } else {
            document.getElementById("pa").style.display = 'none';
            document.getElementById("pl").style.display = 'block';
            document.getElementById('player').pause();
        }

    }

    function mute(x) {
        if (x) {
            document.getElementById('player').muted = true;
            document.getElementById("v11").style.display = "none";
            document.getElementById("v22").style.display = "block";
        } else {
            document.getElementById('player').muted = false;
            document.getElementById("v11").style.display = "block";
            document.getElementById("v22").style.display = "none";
        }
    }

</script>
</html>
