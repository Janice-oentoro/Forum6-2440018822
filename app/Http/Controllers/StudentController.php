<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function home() {
        return view('home');
	}

    public function list() {
        $students = Student::all();
        return view('list', compact('students'));
    }

    public function create() {
		return view('create');
	}

    public function store(Request $request)
    {
        $message = array(
            'name.required' => 'Please student Full Name',
            'name.min' => 'Please enter 5 until 50 characters',
            'name.max' => 'Please enter 5 until 50 characters',
            'nim.required' => 'Please enter student NIM',
            'grade.required' => 'Please enter student Grade',
   
        );

            $request->validate([
                'name' => 'required|min:5|max:50',
                'nim' => 'required',
                'grade' => 'required',
                ],$message);


        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'grade' => $request->grade
        ]);
        return redirect('/');    
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        Student::where('id', $id)
            ->update([
                'name' => $request->name,
                'nim' => $request->nim,
                'grade' => $request->grade
            ]);

        return redirect('/list');
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('/');
    }
}
