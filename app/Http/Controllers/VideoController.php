<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function view(string $id){
        return Video::find($id);
    }

    public function admin(){
        return Video::all();
    }
}
