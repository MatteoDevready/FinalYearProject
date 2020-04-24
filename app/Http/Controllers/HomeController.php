<?php

namespace App\Http\Controllers;
use OpenTok\OpenTok;
use OpenTok\MediaMode;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    //streamApi method
    public function chat(Request $request) 
     {
           // initialze api using api key/secret
           $openTokAPI = new OpenTok(env('OPENTOK_API_KEY'), env('OPENTOK_API_SECRET'));

           // let's cache the session for an hour i.e. 60 mins
        //    $session_token = \Cache::remember('open_tok_session_key', 60, function () use ($openTokAPI) {             
        //         return $openTokAPI->createSession(['mediaMode' => MediaMode::ROUTED]);
        //    });
        
           $session_token = $openTokAPI->createSession(['mediaMode' => MediaMode::ROUTED]);
           $sessionId = $session_token->getSessionId();
           // now, that we have session token we generate opentok token
           $opentok_token = $openTokAPI->generateToken($sessionId, [
                'exerciseireTime' => time()+60,
                'data'       => "Some sample metadata to pass"
           ]);

           return view('home', [
              'session_token' => $session_token,
              'opentok_token' => $opentok_token
           ]);
     }
}
