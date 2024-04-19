<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;

class Task extends Component
{
    public $tasks;
    public string $title;
    public string $description;
    public $taskId;

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
            $task->title        = $this->title;
            $task->description  = $this->description;
            $task->save();
            $this->dispatch('taskCreated', $msg = 'Tarefa editada com sucesso');

        } else {
            $task = new TaskModel();
            $task->title = $this->title;
            $task->description = $this->description;
            $task->save();
            $this->dispatch('taskCreated', 'Tarefa criada com sucesso');

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

    public function done($id)
    {
        $taskDone = TaskModel::find($id);
        $taskDone->update(['done' => !$taskDone->done]);
        $this->tasks = TaskModel::orderBy('id', 'desc')->get();
    }

    public function delete($id)
    {
        $this->taskToDelete = TaskModel::find($id);
        if(!is_null($this->taskToDelete)){
            $this->taskToDelete->delete();
            $this->dispatch('taskCreated', 'Tarefa excluída com sucesso');
        }
        $this->tasks = TaskModel::orderBy('id', 'desc')->get();
    }
}
