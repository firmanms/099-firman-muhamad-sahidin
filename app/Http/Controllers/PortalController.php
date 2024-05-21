<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Sites;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index(){
        $site=Sites::first();
        $list_skpd=Sites::where('id','>',1)->orderBy('name','asc')->get();
        $list_post=Post::orderBy('date_publish','asc')->take(9)->get();
        // dd($list_post);
        return view('frontend.portal.index',
        compact('site','list_skpd','list_post'));
    }
}
