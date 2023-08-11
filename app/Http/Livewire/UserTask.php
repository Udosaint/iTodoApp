<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\User;
use App\Models\Folder;
use Livewire\Component;
use Illuminate\Http\Request;

class UserTask extends Component
{

    public $page = "Add Task";

    public $name;
    public $description;
    public $status;

    public $folder_id;

    public $task_date;

    public $reminder;

    public $setreminder;


    public $folders;


    public $task;
    public $task_id;


    public function mount(Task $task)
    {
        //$this->folders = Auth::user()->folders()->get();

        // the same with the code up
        $this->folders = Folder::where('user_id', auth()->id())
            ->get();
        if (request('page')) {
            $this->page = request('page');
            $this->task = Task::find(request('task'));

            // updating the task inputs

            $this->name = $this->task->name;
            $this->description = $this->task->description;
            $this->task_date = $this->task->task_date;
            $this->folder_id = $this->task->folder_id;
            $this->task_id = $this->task->id;
        }
    }


    public function addTask()
    {
        $validated = $this->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'folder_id' => 'required|numeric',
                'task_date' => 'required',
            ],
            [
                'folder_id' => 'Folder name',
                'folder_id.required' => 'Folder name is required'
            ]
        );

        if ($this->setreminder) {
            $validated['reminder'] = $this->task_date . ' ' . $this->reminder;
        }


        $validated['user_id'] = auth()->id();

        //$folder_id = Folder::find($this->folder_id);

        $validated['folder_id'] = $this->folder_id;

        Task::create($validated);

        session()->flash('message', 'Task added successfully');
        $this->reset(['name', 'description', 'folder_id']);

        return to_route('user.dashboard');
    }


    public function updateTask(Task $task)
    {
        $validated = $this->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'folder_id' => 'required|numeric',
                'task_date' => 'required',
            ],
            [
                'folder_id' => 'Folder name',
                'folder_id.required' => 'Folder name is required'
            ]
        );

        if ($this->setreminder) {
            $validated['reminder'] = $this->task_date . ' ' . $this->reminder;
        }


        $task->update($validated);

        session()->flash('message', 'Task Updated successfully');
        $this->reset(['name', 'description', 'folder_id']);

        return to_route('user.dashboard');
    }
    public function render()
    {
        return view('livewire.user-task');
    }
}
