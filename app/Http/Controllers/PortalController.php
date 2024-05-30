<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Sites;
use App\Models\Slide;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index(){

        //ambil profile site
        $site=Sites::first();
        //ambil list skpd yang sudah di create site
        $list_skpd=Sites::where('id','>',1)->orderBy('name','asc')->get();
        //ambil semua postingan yang ada dan dibatasi 9 terbaru
        $list_post=Post::orderBy('date_publish','desc')->take(9)->get();
        //ambil semua slide milik portal utama
        $slide=Slide::where('site_id',1)->orderBy('id','asc')->get();
        //ambil slide pertama dari portal utama
        $first_slide=$slide->first();
        //ambil slide melewati yang pertama dari portal utama
        $not_first=Slide::where('site_id',1)->orderBy('id','asc')->skip(1)->take(100)->get();

        return view('frontend.portal.index',
        compact('site','list_skpd','list_post','slide','first_slide','not_first'));
    }
}
