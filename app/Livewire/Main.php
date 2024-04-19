<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public string $ola = "Olá! Essas são suas tarefas:";
    public function render()
    {
        return view('livewire.main');
    }
}
