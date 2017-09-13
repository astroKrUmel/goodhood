<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 18.11.2016
 * Time: 00:07
 */

namespace App\Http\Controllers;

use App\Artist;
use App\Event;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;

class ArtistController extends Controller
{

    public function getArtist($name) {
        // get artist
        $artist = Artist
            ::where('urlName', '=', strtolower($name))
            ->where('enabled', '!=', false)
            ->first();

        if (count($artist) <= 0 || $artist === null) {
            return redirect()->action('HomeController@index');
        }

        // get his own events
        $events = $artist->events()->take(10);

        // first artist for every event
        foreach ($events as $event) {
            $event->artistNames = $artist->name;
        }

        // count images
        $artist->galleryImages = glob('images/artists/' . $artist->urlName . '/others/*.jpg');

        // get mixcloudtracks
        $tracks = $artist->mixcloundtracks();

        return View('artists.artist', compact('artist', 'tracks', 'events'));
    }

    public function getDownload($name) {
        $downloadPath = storage_path() . '/' . $name .'.rar';

        $download = [
            'name' => $name,
        ];

        // ka, ob das so stimmt
        $header = [
            'application/x-rar-compressed'
        ];


//        return View('artists.download', compact('download'));
        return response()->download(storage_path('phax.rar'), 'phax.rar');
//        return response()->download('app/storage/phax.rar', 'phax.rar');
    }
}