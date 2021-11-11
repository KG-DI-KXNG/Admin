<?php

namespace App\Http\Livewire;

use App\Models\Course as ModelsCourse;
use App\Models\Teacher;
use App\Models\User;
use Livewire\Component;

class Course extends Component
{

    public $teacher;
    public $courseName;
    public function render()
    {
        $teachers = Teacher::with('user')->get();
        $course = ModelsCourse::with('teacher')->get()->toArray();
        // dd($course);
        return view('livewire.course',['teachers'=>$teachers, 'courses'=>$course]);
    }

    protected $rules = [
        
    ];

    public function updatedCourseName(){
        $this->validate(['courseName'=>'required',]);

    }

    public function submit(){
        $this->validate(['courseName'=>'required',
        'teacher'=>'required',]);
        $c = new ModelsCourse();
        $c->course_nm = $this->courseName;
        $c->teacher_id= $this->teacher;
        $c->save();
        $this->teacher = "";
        $this->courseName = "";

    }
}
