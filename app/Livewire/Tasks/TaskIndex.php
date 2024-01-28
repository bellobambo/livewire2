<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Task LiveWire2')]

class TaskIndex extends Component
{

    public $tasks;

    #[Rule(['required', 'min:5' , 'string'])]
    public $name;

    public function mount()
    {
        $this->tasks = Task::with('user')->get();
    }


    public function save()
    {
        $this->validate();

        Task::create([
            'user_id' => 1,
            'name' => $this->name
        ]);

        return $this->redirect(route('tasks'));
    }

    public function render()
    {
        return view('livewire.tasks.task-index')
            ->with([
                'button' => 'New Task'
            ]);
    }


}
