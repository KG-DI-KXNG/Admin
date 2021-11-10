<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        
        $student = Student::with('phone')->get()->toArray();
        // \dd($student);
        return view('student')->with(\compact('student'));
    }

    public function dashboard(){
        $student = Student::paginate(5);
        return view('dashboard')->with(compact('student'));
    }

    public function edit(int $id){
        // dd(var_dump($id));
        $student = Student::paginate(5);
        return view('dashboard',['id'=>$id])->with(compact('student'));
    }

    public function delete($id){
        Student::destroy($id);
        return \redirect('/dashboard');
    }
}
