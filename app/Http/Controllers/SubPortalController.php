<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Post_category;
use App\Models\Sites;
use Illuminate\Http\Request;

class SubPortalController extends Controller
{
    public function index(string $slug)
    {
        $sites = Sites::where('slug',$slug)->firstOrFail();
        $sitesid = $sites->id;
        $list_post=Post::where('sites_id',$sitesid)->orderBy('date_publish','asc')->take(6)->get();

        return view('frontend.subportal.index',compact('sites','list_post'));
    }

    public function blog(string $slug)
    {
        $sites = Sites::where('slug',$slug)->firstOrFail();
        $sitesid = $sites->id;
        $categories = Post_category::withCount('posts')->get();
        $list_post=Post::where('sites_id',$sitesid)->orderBy('date_publish','asc')->paginate(5);
        $recentpost = Post::where('sites_id',$sitesid)->orderBy('date_publish','asc')->take(6)->get();
        return view('frontend.subportal.blog',compact('sites','list_post','recentpost','categories'));
    }

    public function showpost(string $slug,$slugpost)
    {
        $sites      = Sites::where('slug',$slug)->firstOrFail();
        $sitesid = $sites->id;
        $categories = Post_category::withCount('posts')->get();
        $post       = Post::where('slug',$slugpost)->firstOrFail();
        $recentpost = Post::where('sites_id',$sitesid)->orderBy('date_publish','asc')->take(6)->get();
        return view('frontend.subportal.singleblog',compact('sites','post','recentpost','categories'));
    }
}
