<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    function landing(){
        $slider = DB::table('landing')->select('*')->get();
        $landing1 = DB::table('landing_grid')->select('*')->limit(4)->get();
        $landing2 = DB::table('landing_grid')->select('*')->offset(4)->limit(4)->get();
        $navDisplay = false;

        return view('landing',['slider'=>$slider, 'landing1'=>$landing1, 'landing2'=>$landing2, 'navDisplay'=>$navDisplay]);
    }

    function login(Request $request){
        $email = request('loginEmail');
        $pass = request('loginPass');
        $slider = DB::table('landing')->select('*')->get();
        $landing1 = DB::table('landing_grid')->select('*')->limit(4)->get();
        $landing2 = DB::table('landing_grid')->select('*')->offset(4)->limit(4)->get();
        $user = DB::table('user')->select('email','id','name','password')
            ->where('email','=',$email)->where('password','=',$pass)->get();
        $navDisplay = true;
        if($user->count()==0){
            return redirect()->back()->with('alert', 'Deleted!');
        }
       // $userSession = $request->session()->put('user_name',$user[0]->name);
        $request->session()->put('user_id',$user[0]->id);
        $userName = $request->session()->get('user_name');
        return view('landing',['slider'=>$slider, 'landing1'=>$landing1,
            'landing2'=>$landing2, 'navDisplay'=>$navDisplay, 'userName'=>$userName]);
    }

    function signup(Request $request){
        $email = request('email');
        $name = request('name');
        $pass = request('password');
        $phone = request('phone');
        $user = DB::table('user')->insert(['name'=>$name,'email'=>$email, 'password'=>$pass,'phone'=>$phone]);
        return redirect()->back()->with('alert','User Added Successfully');

    }

    function userPlaylist(Request $request){
        $x = $request->session()->get('user_id');
        $userName = $request->session()->get('user_name');
        // return $x;
        $music = DB::table('user_playlist')
            ->join('songs','songs.song_id','=','user_playlist.song_id')
            ->join('artist','artist.Artist_id','=','songs.artist_id')
            ->select('songs.song_name','songs.song_address','artist.Artist_image','artist.Artist_name')
            ->where('user_playlist.user_id','=',$x)
            ->get();
        return view('userPlaylist',['music'=>$music, 'user'=>$userName]);
    }

    function home(Request $request){
        $music1 = DB::table('collection_title')
            ->join('collection','collection.collection_title_id','=','collection_title.collection_title_id')
            ->join('artist','collection.artist_id','=','artist.Artist_id')
            ->select('collection_title.collection_name','artist.p_name','artist.Artist_name','artist.Artist_image')
            ->where('collection_title.collection_title_id', '=', 1)
            ->get();

        $music2 = DB::table('collection_title')
            ->join('collection','collection.collection_title_id','=','collection_title.collection_title_id')
            ->join('playlist','collection.playlist_id','=','playlist.playlist_id')
            ->select('collection_title.collection_name','playlist.p_name','playlist.playlist_name','playlist.playlist_image')
            ->where('collection_title.collection_title_id', '=', 2)
            ->get();

        $music3 = DB::table('collection_title')
            ->join('collection','collection.collection_title_id','=','collection_title.collection_title_id')
            ->join('songs','collection.song_id','=','songs.song_id')
            ->join('artist','collection.artist_id','=','artist.Artist_id')
            ->select('collection_title.collection_name','songs.song_name','songs.song_image','songs.song_address','artist.Artist_name')
            ->where('collection_title.collection_title_id', '=', 5)
            ->get();

        $user = $request->session()->get('user_name');
        // return $music2;
        return view('home',['music1'=>$music1,
            'music2'=>$music2,
            'music3'=>$music3,
            'user'=>$user]);
    }

    function discover(Request $request){
        $userName = $request->session()->get('user_name');
        $music1 = DB::table('collection_title')
            ->join('collection','collection.collection_title_id','=','collection_title.collection_title_id')
            ->join('songs','collection.song_id','=','songs.song_id')
            ->join('artist','collection.artist_id','=','artist.Artist_id')
            ->select('collection_title.collection_name','songs.song_name','songs.song_image','songs.song_address','artist.Artist_name')
            ->where('collection_title.collection_title_id', '=', 6)
            ->get();

        $music2 = DB::table('collection_title')
            ->join('collection','collection.collection_title_id','=','collection_title.collection_title_id')
            ->join('artist','collection.artist_id','=','artist.Artist_id')
            ->select('collection_title.collection_name','artist.p_name','artist.Artist_name','artist.Artist_image')
            ->where('collection_title.collection_title_id','=',3)
            ->get();

        $music3 = DB::table('collection_title')
            ->join('collection','collection.collection_title_id','=','collection_title.collection_title_id')
            ->join('songs','collection.song_id','=','songs.song_id')
            ->join('artist','collection.artist_id','=','artist.Artist_id')
            ->select('collection_title.collection_name','songs.song_name','songs.song_image','songs.song_address','artist.Artist_name')
            ->where('collection_title.collection_title_id', '=', 7)
            ->get();

        return view('discover',['music1'=>$music1, 'music2'=>$music2, 'music3'=>$music3, 'user'=>$userName]);
        // return json_encode($music1);
    }

    function trending(Request $request){
        $userName = $request->session()->get('user_name');
        $music1 = DB::table('collection_title')
            ->join('collection','collection.collection_title_id','=','collection_title.collection_title_id')
            ->join('artist','collection.artist_id','=','artist.Artist_id')
            ->select('collection_title.collection_name','artist.p_name','artist.Artist_name','artist.Artist_image')
            ->where('collection_title.collection_title_id','=',4)
            ->get();

        $music2 = DB::table('collection_title')
            ->join('collection','collection.collection_title_id','=','collection_title.collection_title_id')
            ->join('songs','collection.song_id','=','songs.song_id')
            ->join('artist','collection.artist_id','=','artist.Artist_id')
            ->select('collection_title.collection_name','songs.song_name','songs.song_image','songs.song_address','artist.Artist_name')
            ->where('collection_title.collection_title_id', '=', 8)
            ->get();
        return view('trending',['music1'=>$music1, 'music2'=>$music2, 'user'=>$userName]);
    }

    function play($x,Request $request){
        $userId = $request->session()->get('user_id');
        $music = DB::table('artist')
            ->join('songs','songs.artist_id','=','artist.Artist_id')
            ->select('artist.Artist_name','songs.song_name','songs.song_address','songs.song_id','artist.color','artist.Artist_image','artist.Artist_cover_image')
            ->where('artist.p_name','=',$x)
            ->get();
        // return $music;
        return view('play',['music'=>$music,'display'=>1,'userId'=>$userId]);
    }


    function play2($y,Request $request){
        $userId = $request->session()->get('user_id');
        $cover = DB::table('playlist')->select('*')->where('p_name','=',$y)->get();
        $music = DB::table('playlist')
            ->join('playlist_songs','playlist_songs.playlist_id','=','playlist.playlist_id')
            ->join('songs','playlist_songs.song_id','=','songs.song_id')
            ->join('artist','songs.artist_id','=','artist.Artist_id')
            ->select('playlist.playlist_name','songs.song_id','songs.song_name','songs.song_address','artist.Artist_image','artist.Artist_name')
            ->where('playlist.p_name','=',$y)
            ->get();

        return view('play',['music'=>$music,'cover'=>$cover,'display'=>2,'userId'=>$userId]);
    }

}
