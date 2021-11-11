<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Teacher extends Component
{


    public function render()
    {
       $schedule = Schedule::where('user_id', Auth::id())->get();
        return view('livewire.teacher',['schedules'=>$schedule]);
    }
}
