<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\Folder;
use Livewire\Component;

class Today extends Component
{

    public $today;
    public function display()
    {
        return [
            $user = auth()->id(),

            $this->today = Task::query()
                ->select('tasks.id', 'tasks.name', 'tasks.description', 'tasks.status', 'tasks.task_date as date', 'folders.name as folder', 'folders.icon')
                ->join('folders', 'tasks.folder_id', '=', 'folders.id')
                ->where(['tasks.user_id' => $user])
                ->where('task_date', now()->format('Y-m-d'))
                ->limit(5)
                ->orderByDesc('tasks.created_at')
                ->get(),

        ];
    }


    public function mount()
    {
        $this->display();
    }


    public function editTask(Task $task)
    {
        return redirect()->route('user.edittask', ['task' => $task, 'page' => 'Edit Task']);
    }

    public function deleteTask(Task $task)
    {
        $task->delete();
        session()->flash('message', 'Task deleted successful');
        $this->display();
    }

    public function completeTask(Task $task)
    {
        $task->update(['status' => 1]);
        session()->flash('message', 'Task Completed successful');
        $this->display();
    }
    public function render()
    {
        return view('livewire.today');
    }
}
