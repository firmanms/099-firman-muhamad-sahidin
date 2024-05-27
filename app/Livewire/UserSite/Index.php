<?php

namespace App\Livewire\UserSite;

use App\Models\Post_category;
use App\Models\Sites;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    public $name,$email,$password,$ppassword,$oldpassword,$sitename,$singkatan,$slug,$postId, $updatePost = false, $addPost = true;
    public $search = '';
    public $sortField = 'name';
    public $sortAsc = true;
    use WithPagination;
    protected $paginationTheme='bootstrap';
    protected $updatesQueryString = ['search'];



    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'name'          => 'required',
        // 'email'         => 'required',
        // 'sitename'      => 'required',
        // 'ppassword'      => 'required',
        // 'singkatan'     => 'required',
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->sitename = '';
        $this->ppassword = '';
        $this->slug = '';
    }

    /**
     * render the post data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {

        return view('backend.livewire.usersite.index',  [
            'usersite' => $this->search === null ?
                        Sites::with('users')->latest()->paginate(5):
                        Sites::with('users')->where('name', 'like', '%' . $this->search . '%')->latest()->paginate(5),
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
            // Sites::create([
            //     'name' => $this->sitename,
            //     'singkatan' => $this->singkatan,
            //     'slug' => Str::slug($this->singkatan, '-'),
            // ]);
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->ppassword),
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
            $site = Sites::findOrFail($id);
            $user = User::findOrFail($id);
            if (!$site) {
                session()->flash('error', 'Kategori tidak ditemukan');
            } else {
                $this->sitename = $site->name;
                $this->singkatan = $site->singkatan;
                $this->name = $user->name;
                $this->email = $user->email;
                $this->oldpassword = $user->password;
                $this->postId = $user->id;
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
            User::whereId($this->postId)->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password ? Hash::make($this->password) : $this->oldpassword,
            ]);
            Sites::whereId($this->postId)->update([
                'name' => $this->sitename,
                'singkatan' => $this->singkatan,
                'slug' => Str::slug($this->singkatan, '-'),
            ]);
            session()->flash('success', 'Usersite Telah diubah!!');
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
