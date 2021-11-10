<?php

namespace App\Http\Livewire;

use App\Models\Group;
use App\Models\PhoneNumber;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Symfony\Contracts\Service\Attribute\Required;

class EditStudent extends Component
{
    public $name;
    public $email;
    public $password;
    public $usertype;
    public $password_confirmation;
    public $successMsg;
    public $assignGroup;

    protected $rules = [
        'name'=>'required',
        'email'=>'required|unique:users,email',
        "usertype"=>'required',
        'password'=>'required|confirmed',
        'assignGroup'=>'required_if:usertype,0|required_if:usertype,2'
    ];
    
    public function render()
    {
        $groups = Group::get();
        return view('livewire.edit-student')->with('groups', $groups);
    }

    public function submit()
    {
        $this->validate();

        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->user_type = $this->usertype;
        $user->password = Hash::make($this->name);
        $user->save();

        if ($this->usertype === "0"){
            $student = new student();

            $student->group_id = $this->assignGroup;
            $student->user_id = $user->id;
            $student->save();

         }elseif($this->usertype === "2"){
            $teacher = new Teacher();
            $teacher->user_id = $user->id;
            $teacher->save();
            
        }
        

        $this->successMsg = "Successfully Added $this->name";
        return;

    }

}
