<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Post_category;
use App\Models\Sites;
use App\Models\Slide;
use Illuminate\Http\Request;

class SubPortalController extends Controller
{
    public function index(string $slug)
    {
        //ambil profile slug site
        $sites = Sites::where('slug',$slug)->firstOrFail();
        //ambil id dari slug site
        $sitesid = $sites->id;
        //ambil post berdasarkan id slug site
        $list_post=Post::where('site_id',$sitesid)->orderBy('date_publish','asc')->take(6)->get();
        //ambil semua slide berdasarkan id slug site
        $slide=Slide::where('site_id',$sitesid)->orderBy('id','asc')->get();
        //ambil slide pertama dari portal slug
        $first_slide=$slide->first();
        //ambil slide melewati yang pertama dari portal slug
        $not_first=Slide::where('site_id',$sitesid)->orderBy('id','asc')->skip(1)->take(100)->get();

        return view('frontend.subportal.index',compact('sites','list_post','first_slide','not_first'));
    }

    public function blog(string $slug)
    {
        $sites = Sites::where('slug',$slug)->firstOrFail();
        $sitesid = $sites->id;
        $categories = Post_category::withCount('posts')->get();
        $list_post=Post::where('site_id',$sitesid)->orderBy('date_publish','asc')->paginate(5);
        $recentpost = Post::where('site_id',$sitesid)->orderBy('date_publish','asc')->take(6)->get();
        return view('frontend.subportal.blog',compact('sites','list_post','recentpost','categories'));
    }

    public function showpost(string $slug,$slugpost)
    {
        $sites      = Sites::where('slug',$slug)->firstOrFail();
        $sitesid = $sites->id;
        $categories = Post_category::withCount('posts')->get();
        $post       = Post::where('slug',$slugpost)->firstOrFail();
        $a=$post->categories;
        // dd($a);
        $recentpost = Post::where('site_id',$sitesid)->orderBy('date_publish','asc')->take(6)->get();
        return view('frontend.subportal.singleblog',compact('sites','post','recentpost','categories'));
    }

    public function showpage(string $slug,$slugpage)
    {
        $sites      = Sites::where('slug',$slug)->firstOrFail();
        $sitesid = $sites->id;
        $categories = Post_category::withCount('posts')->get();
        $slugpages=$slugpage;
        // $page       = Page::where('slug',$slugpage)->firstOrFail();
        $recentpost = Post::where('site_id',$sitesid)->orderBy('date_publish','asc')->take(6)->get();
        return view('frontend.subportal.page',compact('sites','recentpost','categories','slugpages'));
    }
}
