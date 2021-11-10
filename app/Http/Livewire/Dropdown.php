<?php

namespace App\Http\Livewire;

use App\Models\PhoneNumber;
use App\Models\Student;
use Livewire\Component;


class Dropdown extends Component
{
    public $studentInfo;
    public $studentno;
    public $number = [];

    public function mount(){
        $this->studentInfo = Student::all();
    }

    public function render()
    {
        return view('livewire.dropdown');
    }

    public function change($value){
       $this->number = PhoneNumber::where('student_id',$value)->get();
    }

}
