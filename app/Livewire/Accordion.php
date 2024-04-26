<?php

namespace App\Livewire;

use App\Models\question;
use Livewire\Component;
use Livewire\WithPagination;

class Accordion extends Component
{
    use WithPagination;


    public $search;

    public function mount($search) {
        $this->search = $search;
    }
    public function render()
    {
        return view('livewire.accordion', [
            'questions' => question::latest()
            ->where('pertanyaan','like','%'. $this->search .'%')
            ->paginate(5)
        ]);
    }
}
