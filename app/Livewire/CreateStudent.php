<?php

namespace App\Livewire;

use Livewire\Component;

class CreateStudent extends Component
{
    public $name, $email, $classe_id, $section_id;
    
    public function render()
    {
        return view('livewire.create-student');
    }
}
