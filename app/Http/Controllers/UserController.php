<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 17.11.2016
 * Time: 21:05
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function create() {
        return View('users.create');
    }

    public function store(Request $request) {

        User::create($request->all());
        return 'success';
//        return $request->all();


    }
}

