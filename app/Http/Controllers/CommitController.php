<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Events\CommitEvent;
use Illuminate\Http\Request;
use Validator;
use Event;

class CommitController extends Controller
{
    public function commit(Request $request)
    {
        $message = $request->message;
        
        $validator = Validator::make($request->all(), [
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        
        $ip = $request->ip();
        
        $json = json_decode(file_get_contents('http://freegeoip.net/json/' . $ip), true);
        
        Event::fire(new CommitEvent($json['latitude'], $json['longitude'], $message));
        
        return "event ok";
    }
}
