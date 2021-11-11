<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use Livewire\Component;

class AllSchedule extends Component
{
    public function render()
    {
        $schedules = Schedule::paginate(5);
        return view('livewire.all-schedule')->with('schedules', $schedules);
    }
}
