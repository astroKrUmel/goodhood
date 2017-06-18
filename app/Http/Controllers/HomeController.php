<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // last 20 events and the forgein playing artists
        $events = Event::all()->take(20);

        foreach ($events as $event) {
            $artists = $event->artists();

            // create artists name string
            for ($i=0; $i<count($artists); $i++) {
                $event->artistNames .= $artists[$i]['name'] . ', ';
            }
            $event->artistNames = rtrim($event->artistNames, ', ');
        }

        // all artists
        $artists = Artist::all();
        return View('home', compact('events', 'artists'));
    }

    public function partner() {
        $partners = config('partners');
        return View('partner', compact('partners'));
    }

    public function impressum() {
        return View('impressum');
    }
}
