<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedController extends Controller
{
    public function insert(Request $request){
        $email = $request->email;
        $content = $request->content;
        $feed = new Feedback;
        $feed->email = $email;
        $feed->content = $content;
        $feed->save();
        return true;
    }
  
}
