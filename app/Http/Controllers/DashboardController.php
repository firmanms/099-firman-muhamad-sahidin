<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Sites;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function dashboard(){
        if (Auth::user()->role->name === 'Admin'){
            $countuser=User::count();
            $countsite=Sites::count();
            $countpost=Post::count();
            $listsite=Sites::with('users')->get();
            $list_post=Post::orderBy('date_publish','desc')->take(6)->get();
        }else{
            $countuser=User::count();
            $countsite=Sites::count();
            $countpost=Post::where('site_id',Auth::user()->id)->count();
            $listsite=Sites::with('users')->get();
            $list_post=Post::where('site_id',Auth::user()->id)->orderBy('date_publish','desc')->take(6)->get();
        }
        
        // dd($listsite);
        return view('backend.dashboard',
        compact('countuser','countsite','countpost'
               ,'listsite','list_post'));


    }
}
