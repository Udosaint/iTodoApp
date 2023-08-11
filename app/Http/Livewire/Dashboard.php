<?php

namespace App\Http\Livewire;

use App\Models\Folder;
use App\Models\Task;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{

    public $folders;
    public $tasks;

    public $top5;
    public $complete_tasks;
    public $un_complete_tasks;


    public function display()
    {
        return [
            $user = auth()->id(),
            $this->folders = Folder::where('user_id', $user)->get(),
            $this->tasks = Task::where(['user_id' => $user])->get(),

            $this->top5 = Task::query()
                ->select('tasks.id', 'tasks.name', 'tasks.description', 'tasks.status', 'tasks.task_date as date', 'folders.name as folder', 'folders.icon')
                ->join('folders', 'tasks.folder_id', '=', 'folders.id')
                ->where(['tasks.user_id' => $user])
                ->limit(5)
                ->orderByDesc('tasks.created_at')
                ->get(),

            //$this->top5 = Task::with('user', 'folders')->get();

            $this->complete_tasks = Task::where(['user_id' => $user, 'status' => 1])->get(),
            $this->un_complete_tasks = Task::where(['user_id' => $user, 'status' => 0])->get(),
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
        return view('livewire.dashboard');
    }
}
