<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Contracts\Support\ValidatedData;

class InformationController extends Controller
{
    public function create()
    {
        return view('information.create-student');
    }

    public function showForm($id)
    {
        $student = Information::findOrFail($id);
        return view('information.update-student', compact('student'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'middle_name' => 'required|string',
            'year_section' => 'required|string',
            'age' => 'required|integer|min:6|max:60',
            // might need to be more specific
            'contact_number' => 'required|numeric',
            // but nice to keep for future reference
            // 'email' => 'required|email|unique:information,email',
            'address' => 'required|string',
            'mother_name' => 'required|string',
            'father_name' => 'required|string',
            'gender' => 'required|string|in:male,female',
        ]);

        Information::create($validatedData);
        return redirect('/');

        // or 
        // return redirect('/')->with('success', 'Information has been added ');
        // or
        // return redirect()->route('create-student', ['status' => 'Student data entry successfully created.']);
    }

    public function updateStudent(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'middle_name' => 'required|string',
            'year_section' => 'required|string',
            'age' => 'required|integer|min:6|max:60',
            'contact_number' => 'required|numeric',
            'address' => 'required|string',
            'mother_name' => 'required|string',
            'father_name' => 'required|string',
            'gender' => 'required|string|in:male,female',
        ]);

        Information::where('id', $id)->update($validatedData);
        return redirect('/');
    }

    public function showAllStudents()
    {
        $students = Information::all();
        return view('information.show-students', compact('students'));
    }

    public function deleteStudent($id)
    {
        Information::findOrFail($id)->delete();
        return redirect('/');

        // below keeps the URL unchanged, but showing the proper view
        // return view('information.show-students');
    }
}
