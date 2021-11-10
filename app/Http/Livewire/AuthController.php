<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AuthController extends Component
{

    public $email = '';
    public $password = '';
    public $remember = false;

    protected $rules = [
        'email' => 'required|email|exists:users,email',
        'password' => 'required',
    ];

    /*

    Sometimes it's useful to validate a form field as a user types into it. 
    Livewire makes "real-time" validation simple with the $this->validateOnly() method.

    To validate an input field after every update, we can use Livewire's updated hook:

    */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
        {
            return view('livewire.auth-controller');
        }

    public function login()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        $email = $this->email;
        $password = $this->password;
        $credentials = ['email'=>$email, 'password'=>$password];

        if (Auth::attempt($credentials)) {
            if(Auth::user()->user_type == "0"){
                return redirect('/student');
            }elseif(Auth::user()->user_type == "1"){
                return redirect('/dashboard');
            }else{
                return redirect('/teacher');
            }

        }

        else{
            session()->flash('email', 'Sumting Went Worng Bang!!!');
        }
    }
    
}
