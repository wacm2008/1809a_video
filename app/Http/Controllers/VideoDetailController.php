<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VideoModel;
class VideoDetailController extends Controller
{
    public function videoDetail($vid)
    {
        if(!$vid){
            return;
        }
        $videoDetail = VideoModel::where(['vid'=>$vid])->first()->toArray();
        return view('video/detail',['videoDetail'=>$videoDetail]);
    }
}
