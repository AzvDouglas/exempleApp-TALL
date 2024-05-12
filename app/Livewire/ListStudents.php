<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Student;

class ListStudents extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.list-students',[
            'students' => Student::all(),
        ]);
    }
}
