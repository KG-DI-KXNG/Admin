<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Teacher extends Component
{


    public function render()
    {
       
        return view('livewire.teacher');
    }
}
