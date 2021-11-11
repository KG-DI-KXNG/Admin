<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDash extends Component
{
    use WithPagination;

    public $edit;
    public $name;
    public $email;


    public function mount(){
        

    }
    public function render()
    {
        $users = User::orderBy("user_type")->paginate(8);
        return view('livewire.admin-dash')->with(["users"=>$users]);
    }

    public function editUser($value){
        $this->edit = User::find($value)->name;
        $this->name = User::find($value)->name;
        $this->email = User::find($value)->email;
    }

    public function deleteUser($id){
        User::destroy($id);
    }
    public function changeInfo($value){
        $this->validate([
            'name'=>"required",
            'email'=>"email|unique:users,email,".$value,
        ],[
            'name.required'=>"Name Cannot be empty",
        ]
    );

        $user = User::find($value);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();
        $this->edit = "";
    }
}
