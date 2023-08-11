<?php

namespace App\Http\Livewire;

use App\Models\Folder;
use App\Models\Task;
use Livewire\Component;

class TaskFolder extends Component
{



    public $tasks;

    public $folder;

    public $folder_name;


    public function mount()
    {
        $this->folder = request('folder');

        $this->folder_name = Folder::find($this->folder);

        $user = auth()->id();

        $this->tasks = Task::query()
            ->select('tasks.id', 'tasks.name', 'tasks.description', 'tasks.status', 'tasks.task_date as date', 'folders.name as folder', 'folders.icon')
            ->join('folders', 'tasks.folder_id', '=', 'folders.id')
            ->where(['tasks.user_id' => $user, 'tasks.folder_id' => $this->folder])
            ->orderByDesc('tasks.created_at')
            ->get();
    }
    public function render()
    {
        return view('livewire.task-folder');
    }
}
