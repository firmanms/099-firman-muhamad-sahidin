<?php

namespace App\Livewire\PostCategory;

use App\Models\Post_category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    public $name,$postId, $updatePost = false, $addPost = true;
    public $search = '';
    public $sortField = 'name';
    public $sortAsc = true;
    use WithPagination;
    protected $paginationTheme='bootstrap';
    protected $updatesQueryString = ['search'];

    protected $listeners = [
        'deleteCategory'=>'destroy'
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'name' => 'required',
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->name = '';
    }

    /**
     * render the post data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {

        return view('backend.livewire.post-category.index',  [
            'posts_category' => $this->search === null ?
                        Post_category::latest()->paginate(5) :
                        Post_category::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(5),
        ]);


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
            Post_category::create([
                'name' => $this->name,
            ]);

            session()->flash('success', 'Kategori Telah ditambahkan!!');
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
            $posts_category = Post_category::findOrFail($id);
            if (!$posts_category) {
                session()->flash('error', 'Kategori tidak ditemukan');
            } else {
                $this->name = $posts_category->name;
                $this->postId = $posts_category->id;
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
        try {
            Post_category::whereId($this->postId)->update([
                'name' => $this->name,
            ]);
            session()->flash('success', 'Kategori Telah diubah!!');
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
    // public function destroy($id)
    // {
    //     try {
    //         Post_category::find($id)->delete();
    //         session()->flash('success', "Kategori telah dihapus!!");
    //     } catch (\Exception $e) {
    //         session()->flash('error', "Ada Kesalahan!!");
    //     }
    // }
    public function destroy($id){
        try{
            Post_category::find($id)->delete();
            session()->flash('success',"Category Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting category!!");
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
