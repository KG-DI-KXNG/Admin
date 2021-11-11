<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Group;
use App\Models\Schedule as ModelsSchedule;
use App\Models\User;
use Livewire\Component;

class Schedule extends Component
{
    public $group;
    public $starttime;
    public $endtime;
    public $teacher;
    public $date;
    public $courses;

    public function render()
    {
        $teachers = User::where("user_type", 2)->get();
        $groups = Group::get();
        $course = Course::get();
        return view('livewire.schedule',['teachers'=>$teachers, 'groups'=>$groups, 'course'=>$course]);
    }

    public function updatedTeacher($value){
        
    }

    protected $rules = [
        'group'=>'required',
        'starttime'=>'required',
        "endtime"=>'required',
        'teacher'=>'required',
        'date'=>'required'
    ];

    public function submit(){
        $this->validate();
        
        $count = ModelsSchedule::where('user_id', $this->teacher)->where('group_id', $this->group)->where('s_time', $this->starttime)->count();
        // dd($count);
        if (!$count){
        $s = new ModelsSchedule();
        $s->user_id = $this->teacher;
        $s->course_id = $this->courses;
        $s->group_id = $this->group;
        $s->s_time = $this->starttime;
        $s->e_time = $this->endtime;
        $s->date = $this->date;
        $s->save();
        Session()->flash('error', 'Successfuly Assigned'); 
    }
    else {
        Session()->flash('error', 'Already Assigned'); 
    }
        return;
    }
}
