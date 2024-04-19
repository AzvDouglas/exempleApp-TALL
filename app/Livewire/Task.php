<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;

class Task extends Component
{
    public $tasks;
    public $title;
    public $taskId;
    public $description;

    protected $rules = [
        'title'       => 'required|max:40',
        'description' => 'required|max:400',
    ];

    public function mount(): void
    {
        $this->tasks = TaskModel::orderBy('id', 'desc')->get();
        $task = new TaskModel();

    }

    public function render()
    {
        return view('livewire.task');
    }

    public function save()
    {
        $this->validate();

        if ($this->taskId) {
            $task = TaskModel::find($this->taskId);
            $task->title = $this->title;
            $task->description = $this->description;
            $task->save();
        } else {
            $task = new TaskModel();
            $task->title = $this->title;
            $task->description = $this->description;
            $task->save();
        }

        //limpar o formulário
        $this->title = '';
        $this->description = '';
        $this->taskId = null;

        $this->tasks = TaskModel::orderBy('id', 'desc')->get();
    }
    public function edit(TaskModel $task): void
    {
        $this->task = $task;
        $this->taskId = $task->id;
        $this->description = $task->description;
        $this->title = $task->title;
        //$this->mount();
    }
    public function updated()
    {
        $this->validate();
    }
}
