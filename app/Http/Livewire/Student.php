<?php

namespace App\Http\Livewire;

use App\Models\Student as StudentModel;
use Livewire\Component;

class Student extends Component
{

    public $studentID;
    public $editStudent;
    public $name;
    public $dob;

    public function mount($id){
        $this->studentID = $id;
        $this->editStudent = StudentModel::find($id);
        $this->name = $this->editStudent->name;
        $this->dob = $this->editStudent->dob;
    }
    public function render()
    {
        return view('livewire.student');
    }

    public function submit(){
        $student = $this->editStudent;
        $student->name = $this->name;
        $student->dob = $this->dob;
        $student->save();
        return redirect('/dashboard');
    }
}
