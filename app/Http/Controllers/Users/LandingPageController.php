<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        return view('pages.users.layout.dashboard');
    }

    public function detail($id){

        return $id;

        return view('pages.users.layout.portfolio');
    }
}
