<?php

namespace App\Livewire\Slide;

use App\Models\Post;
use App\Models\Post_category;
use App\Models\Slide;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Index extends Component
{

    public $postId,$site_id,$title,$subtitle,$image,$oldimage, $updatePost = false, $addPost = true;
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
        'subtitle' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,svg,gif|max:2048'
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->title = '';
        $this->subtitle = '';
        $this->image = '';
    }

    /**
     * render the post data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        if (Auth::user()->role->name === 'Admin'){
            return view('backend.livewire.slide.index',  [
                'slides' => $this->search === null ?
                            Slide::latest()->paginate(6) :
                            Slide::where('title', 'like', '%' . $this->search . '%')->latest()->paginate(6),
                $this->site_id=Auth::user()->id,
            ]);
        }else{
            return view('backend.livewire.slide.index',  [
                'slides' => $this->search === null ?
                            Slide::where('site_id',Auth::user()->id)->latest()->paginate(6) :
                            Slide::where('site_id',Auth::user()->id)->where('title', 'like', '%' . $this->search . '%')->latest()->paginate(6),
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
            Slide::create([
                'site_id' => $this->site_id,
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'image' => $this->image->store('slide/'.$this->site_id,'public'),
            ]);

            session()->flash('success', 'Slide Telah ditambahkan!!');
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
            $slide = Slide::findOrFail($id);
            if (!$slide) {
                session()->flash('error', 'Slide tidak ditemukan');
            } else {
                $this->postId = $slide->id;
                $this->title = $slide->title;
                $this->subtitle = $slide->subtitle;
                $this->oldimage = $slide->image;
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
            $gambar = $this->image->store('slide/'.$this->site_id,'public');
        }else{
            $gambar =  $this->oldimage;
        }

        try {
            Slide::whereId($this->postId)->update([
                // 'site_id' => $this->site_id,
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'image' => $gambar,
            ]);
            session()->flash('success', 'Slide Telah diubah!!');
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
     * delete specific post data from the slide table
     * @param mixed $id
     * @return void
     */
    public function destroy($id)
    {
        try {
            Slide::find($id)->delete();
            session()->flash('success', "Slide telah dihapus!!");
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
