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

    #[Rule(['required', 'min:5', 'string'])]
    public $name;

    public function mount()
    {
        // $this->tasks = Task::with('user')->get();
    }


    // After initial request
    public function hydrate()
    {
        // dd('ok');
    }

    //On every Request
    public function boot()
    {
        $this->tasks = Task::with('user')->get();


    }

    public function updating()
    {

    }


    public function updated()
    {

    }


    public function rendering($view, $data)
    {
        // $data['name'] = 'Dary';

        // dd($data);
    }

    public function rendered($view, $html)
    {
        // dd($html);
    }

    public function dehydrate()
    {
        $this->tasks = $this->tasks->toArray();

        dd($this->tasks);
    }





    public function save()
    {
        $this->validate();

        Task::create([
            'user_id' => 1,
            'name' => $this->name
        ]);
        session()->flash('message', 'Task has been created');

        $this->dispatch('task-updated');

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
