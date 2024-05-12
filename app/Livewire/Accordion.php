<?php

namespace App\Livewire;

use App\Models\question;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Accordion extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap';

    #[Url]
    public $search;

    // public function mount($search) {
    //     $this->search = $search;
    // }
    public function render()
    {
        // return view('livewire.accordion', [
        //     'questions' => question::latest()
        //     ->get()
        // ]);
        return view('livewire.accordion', [
            'questions' => question::latest()
            ->where('pertanyaan','like','%'. $this->search .'%')
            ->get(),
        ]);
    }
}
