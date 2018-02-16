<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \File;
use \Twitter;

class TwitterController extends Controller
{
    private $count=30;
    private $format='array';

    public function twitterUserTimeLine(){
        $data=Twitter::getUserTimeline(['count'=>$this->count,'format'=>$this->format]);

        return view('twitter')->with('data',$data);
    }
}
