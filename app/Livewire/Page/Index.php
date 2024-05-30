<?php

namespace App\Livewire\Post;

use App\Models\Post;
use App\Models\Post_category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Index extends Component
{

    public $postId,$site_id,$post_category_id,$title,$slug,$description,$image,$oldimage,$date_publish,$category, $updatePost = false, $addPost = true;
    public $search = '';
    public $sortField = 'title';
    public $sortAsc = true;
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme='bootstrap';
    protected $updatesQueryString = ['search'];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'date_publish' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,svg,gif|max:2048'
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->title = '';
        $this->description = '';
        $this->image = '';
        $this->date_publish = '';
        $this->post_category_id = '';
    }

    /**
     * render the post data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        if (Auth::user()->role->name === 'Admin'){
            return view('backend.livewire.post.index',  [
                'posts' => $this->search === null ?
                            Post::latest()->paginate(6) :
                            Post::where('title', 'like', '%' . $this->search . '%')->latest()->paginate(6),
                'post_category'=>Post_category::all(),
                $this->site_id=Auth::user()->id,
            ]);
        }else{
            return view('backend.livewire.post.index',  [
                'posts' => $this->search === null ?
                            Post::where('site_id',Auth::user()->id)->latest()->paginate(6) :
                            Post::where('site_id',Auth::user()->id)->where('title', 'like', '%' . $this->search . '%')->latest()->paginate(6),
                'post_category'=>Post_category::all(),
                $this->site_id=Auth::user()->id,
            ]);
        }

    }

    /**
     * Open Add Post form
     * @return void
     */
    public function create()
    {
        $this->resetFields();
        $this->addPost = true;
        $this->updatePost = false;
    }

    /**
     * store the user inputted post data in the posts table
     * @return void
     */
    public function store()
    {
        $this->validate();
        try {
            Post::create([
                'site_id' => $this->site_id,
                'post_category_id' => $this->post_category_id,
                'title' => $this->title,
                'slug' => Str::slug($this->title, '-'),
                'description' => $this->description,
                'image' => $this->image->store('thumbnail/'.$this->site_id.'/','public'),
                'date_publish' => $this->date_publish,
            ]);

            session()->flash('success', 'Postingan Telah ditambahkan!!');
            $this->resetFields();
            $this->addPost = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada Kesalahan!!');
        }
    }

    /**
     * show existing post data in edit post form
     * @param mixed $id
     * @return void
     */
    public function edit($id)
    {
        try {
            $posts = Post::findOrFail($id);
            if (!$posts) {
                session()->flash('error', 'Postingan tidak ditemukan');
            } else {
                $this->title = $posts->title;
                $this->postId = $posts->id;
                $this->description = $posts->description;
                $this->oldimage = $posts->image;
                $this->date_publish = $posts->date_publish;
                $this->post_category_id = $posts->post_category_id;
                $this->updatePost = true;
                $this->addPost = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada Kesalahan!!');
        }

    }

    /**
     * update the post data
     * @return void
     */
    public function update()
    {
        $this->validate();
        if ($this->image) {
            $gambar = $this->image->store('thumbnail/'.$this->site_id.'/','public');
        }else{
            $gambar =  $this->oldimage;
        }

        try {
            Post::whereId($this->postId)->update([
                // 'site_id' => $this->site_id,
                'post_category_id' => $this->post_category_id,
                'title' => $this->title,
                'slug' => Str::slug($this->title, '-'),
                'description' => $this->description,
                'image' => $gambar,
                'date_publish' => $this->date_publish,
            ]);
            session()->flash('success', 'Postingan Telah diubah!!');
            $this->resetFields();
            $this->updatePost = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada Kesalahan!!');
        }
    }

    /**
     * Cancel Add/Edit form and redirect to post listing page
     * @return void
     */
    public function cancel()
    {
        $this->addPost = true;
        $this->updatePost = false;
        $this->resetFields();
    }

    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function destroy($id)
    {
        try {
            Post::find($id)->delete();
            session()->flash('success', "Postingan telah dihapus!!");
        } catch (\Exception $e) {
            session()->flash('error', "Ada Kesalahan!!");
        }
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }
    public function updatingSearch(){
        $this->resetPage();
    }
}
