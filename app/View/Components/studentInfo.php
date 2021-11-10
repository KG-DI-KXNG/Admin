<?php

namespace App\View\Components;

use Illuminate\View\Component;

class studentInfo extends Component
{

    public $students;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($student)
    {
        $this->students = $student;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.student-info');
    }
}
