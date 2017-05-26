<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 18.11.2016
 * Time: 00:07
 */

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Routing\Controller;

class ArtistController extends Controller
{
    public static  function getAllArtists() {
        $artists = Artist::all();

        return View('artists.allArtists', compact('artists'));
    }

    public static function getArtist($name) {
        $artist = Artist::where('urlName', '=', strtolower($name))->first();

        if ($artist === null) {
            return Redirect()->action('HomeController@index');
        }

        $tracks = $artist->mixcloundtracks();

        return View('artists.artist', compact('artist', 'tracks'));
    }
}