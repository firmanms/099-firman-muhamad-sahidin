<?php

namespace App\Livewire\Profile;

use App\Models\Post_category;
use App\Models\Sites;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Index extends Component
{

    public
    $site_id,
    $name,
    $singkatan,
    $slug,
    $name_leader,
    $image_leader,
    $oldimage_leader,
    $greeting,
    $video_profile,
    $address,
    $telp,
    $whatsapp,
    $email,
    $tw,
    $fb,
    $ig,
    $tiktok,
    $yt,
    $logo,
    $maps,
    $oldlogo,
    $postId,
    $updatePost = false,
    $addPost = true;
    public $search = '';
    public $sortField = 'name';
    public $sortAsc = true;
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme='bootstrap';
    protected $updatesQueryString = ['search'];

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
        $this->image_leader = '';
        $this->logo = '';
    }

    /**
     * render the post data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {

        return view('backend.livewire.profile.index',  [
            'profile' => Sites::where('id', Auth::user()->id )->first(),
            $profile=Sites::where('id', Auth::user()->id )->first(),
            $this->site_id=$profile->id,
            $this->name=$profile->name,
            $this->singkatan=$profile->singkatan,
            $this->name_leader=$profile->name_leader,
            $this->greeting=$profile->greeting,
            $this->video_profile=$profile->video_profile,
            $this->address=$profile->address,
            $this->telp=$profile->telp,
            $this->whatsapp=$profile->whatsapp,
            $this->email=$profile->email,
            $this->tw=$profile->tw,
            $this->fb=$profile->fb,
            $this->ig=$profile->ig,
            $this->tiktok=$profile->tiktok,
            $this->yt=$profile->yt,
            $this->maps=$profile->maps,
            $this->oldlogo=$profile->logo,
            $this->oldimage_leader=$profile->image_leader,


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
     * show existing post data in edit post form
     * @param mixed $id
     * @return void
     */
    // public function edit($id)
    // {
    //     try {
    //         $profile = Sites::findOrFail(Auth::user()->id);
    //         if (!$profile) {
    //             session()->flash('error', 'Profile tidak ditemukan');
    //         } else {
    //             $this->name = $profile->name;
    //             $this->updatePost = true;
    //             $this->addPost = false;
    //         }
    //     } catch (\Exception $ex) {
    //         session()->flash('error', 'Ada Kesalahan!!');
    //     }

    // }

    /**
     * update the post data
     * @return void
     */
    public function update()
    {
        $this->validate();
        if ($this->image_leader) {
            $gambar_leader = $this->image_leader->store('profile/'.$this->site_id,'public');
        }else{
            $gambar_leader =  $this->oldimage_leader;
        }
        if ($this->logo) {
            $gambar_logo = $this->logo->store('profile/'.$this->site_id,'public');
        }else{
            $gambar_logo =  $this->oldlogo;
        }
        try {
            Sites::whereId($this->site_id)->update([
                'name'          =>$this->name,
                'singkatan'     =>$this->singkatan,
                'slug'          => Str::slug($this->singkatan, '-'),
                'name_leader'   =>$this->name_leader,
                'image_leader'  =>$gambar_leader,
                'greeting'      =>$this->greeting,
                'video_profile' =>$this->video_profile,
                'address'       =>$this->address,
                'telp'          =>$this->telp,
                'whatsapp'      =>$this->whatsapp,
                'email'         =>$this->email,
                'logo'          =>$gambar_logo,
                'tw'            =>$this->tw,
                'fb'            =>$this->fb,
                'ig'            =>$this->ig,
                'tiktok'        =>$this->tiktok,
                'yt'            =>$this->yt,
                'maps'            =>$this->maps,
            ]);
            session()->flash('success', 'Profil Telah diubah!!');
            $this->resetFields();
            $this->updatePost = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada Kesalahan!!');
        }
    }


}
