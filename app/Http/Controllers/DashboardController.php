<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Sites;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard(){
        $countuser=User::count();
        $countsite=Sites::count();
        $countpost=Post::count();
        $listsite=Sites::with('users')->get();
        // dd($listsite);
        return view('backend.dashboard',
        compact('countuser','countsite','countpost'
               ,'listsite'));


    }
}
