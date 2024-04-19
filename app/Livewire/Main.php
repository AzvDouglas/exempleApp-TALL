<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public string $ola = "Olá! Essas são suas tarefas:";
    protected $listeners = ['taskCreated'];

    public function taskCreated($msg)
    {
        session()->flash('message', $msg);

    }
    public function render()
    {
        return view('livewire.main');
    }
}
