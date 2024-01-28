<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create LiveWire2')]

class TaskCreate extends Component
{


    public function render()
    {
        return view('livewire.tasks.task-create');
    }
}
