<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;

class Task extends Component
{
    public $tasks;
    public $title;
    public $description;

    protected $rules = [
        'title'       => 'required|max:40',
        'description' => 'required|max:400',
    ];

    public function mount(): void
    {
        $this->tasks = TaskModel::orderBy('id', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.task');
    }

    public function save()
    {
        $this->validate();

        $task = new TaskModel();
        $task->title = $this->title;
        $task->description = $this->description;
        $task->save();
        //limpar o formulário
        $this->title = '';
        $this->description = '';

        $this->dispatch('taskCreated', 'Tarefa adicionada!');
        $this->mount();
    }

    public function updated()
    {
        $this->validate();
    }
}
