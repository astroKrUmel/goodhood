<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 17.11.2016
 * Time: 19:06
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class AlbumController extends Controller
{
    public function index() {
        $albums  = [
            '0' => [
                'key' => 123,
                'name' => 'lalala'
            ],

            '1' => [
                'key' => 14,
                'name' => 'lalala2'
            ]
        ];

        return View('album.index', compact('albums'));
    }
}