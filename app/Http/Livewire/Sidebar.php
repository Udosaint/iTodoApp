<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Folder;
use Livewire\Livewire;
use Livewire\Component;
use Illuminate\View\View;
use function Termwind\render;

use App\Http\Livewire\TaskFolder;
use App\Models\Task;
use Livewire\LivewireViewCompilerEngine;

class Sidebar extends Component
{

    public $folders;

    public $user;

    public $today;


    public function showfolder(Folder $folder)
    {
        return to_route('user.folder', ['folder' => $folder]);
    }
    public function render()
    {

        //$this->user = User::where('id', auth()->user())->get();

        $this->user = auth()->user();
        $this->folders = Folder::where('user_id', auth()->id())
            ->get();

        $this->today = Task::where('task_date', now()->format('Y-m-d'))->count();
        return view('livewire.sidebar', [$this->folders, $this->user]);
    }
}
