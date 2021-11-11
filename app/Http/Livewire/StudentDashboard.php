<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StudentDashboard extends Component
{
    // public $return_value;
    public function render()
    {
        $student = Student::where("students.user_id", Auth::id())
                            ->join("schedules", "schedules.group_id", "=", "students.group_id")
                            ->join("users", "users.id", "=", "schedules.user_id")
                            ->join("groups", "groups.id","=", "students.group_id")
                            ->join("courses", "courses.id", "=", "schedules.course_id")
                            ->get();
        return view('livewire.student-dashboard',['student'=>$student]);
    }

}
