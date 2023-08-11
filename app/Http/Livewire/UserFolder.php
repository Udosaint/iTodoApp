<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Icons;
use App\Models\Folder;
use Livewire\Component;

class UserFolder extends Component
{
    // for the changing of page
    public $page = "Add";

    // variable to hold all icons
    public $icons;

    // var for all folders in the DB
    public $folders;

    // to store a folder ID
    public $folder;

    public $name;
    public $icon;

    public function mount()
    {
        $this->icons = Icons::all();

        $this->page;
        //$this->folders = User::first()->folders()->get();
    }


    public function addfolder()
    {
        $validated = $this->validate(
            [
                'name' => ['required', 'string', 'min:3'],
                'icon' => ['required'],
            ],
            [
                'name.required' => 'Folder name is required',
                'name.string' => 'Folder name is required',
            ],
            ['name' => 'Folder name']
        );

        //dd(auth()->id());

        $validated['user_id'] = auth()->id();

        Folder::create($validated);

        $this->name = '';
        $this->icon = '';

        session()->flash('message', 'Folder created successful');
        //return redirect('/create-folder')->with('message', 'Folder created successful');
    }


    public function editFolder(Folder $folder)
    {
        $page = "Edit";

        $context = [
            $this->folders = User::first()->folders()->latest()->get(),
            $this->page = $page,
            $this->name = $folder->name,
            $this->icon = $folder->icon
        ];

        $this->folder = $folder;
        return view('livewire.user-folder', $context);
    }


    public function updatefolder(Folder $folder)
    {
        $folder = $this->folder;

        $validated = $this->validate(
            [
                'name' => ['required', 'string', 'min:3'],
                'icon' => ['required'],
            ],
            [
                'name.required' => 'Folder name is required',
                'name.string' => 'Folder name is required',
            ],
            ['name' => 'Folder name']
        );

        // update the folder
        $folder->update($validated);

        // reset the fields
        $this->name = '';
        $this->icon = '';

        // send my alert
        session()->flash('message', 'Folder updated successful');

        // set page to add folder
        $this->page = "Add";

        // print out the folders ny lates update
        //$this->folders = auth()->user()->folders()->orderByDesc('updated_at')->get();
        $this->folders = Folder::where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->get();
        //return redirect('/create-folder')->with('message', 'Folder created successful');
    }

    public function deleteFolder(Folder $folder)
    {
        $folder->delete();
        session()->flash('message', 'Folder deleted successful');
        return view('livewire.user-folder');
    }


    public function render()
    {
        //$this->folders = auth()->user()->folders()->orderByDesc('created_at')->get();
        $this->folders = Folder::where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->get();
        return view('livewire.user-folder', [$this->folders]);
    }
}
