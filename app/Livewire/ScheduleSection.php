<?php

namespace App\Livewire;

use App\Models\Schedule;
use Livewire\Component;
use Livewire\WithPagination;

class ScheduleSection extends Component

{
    use WithPagination;

    protected $dates = [
        'tanggal_buka' => 'datetime'
    ];
    public function render()
    {
        return view('livewire.schedule-section', [
            'schedules' => Schedule::latest()
            ->paginate(8),
        ]);
    }
}
