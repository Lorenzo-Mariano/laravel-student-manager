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

    // public function crapper()
    // {
    //     return view('testing');
    // }

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
            // turns out we dont need this lol
            // but nice to keep for future reference
            // 'email' => 'required|email|unique:information,email',
            'address' => 'required|string',
            'mother_name' => 'required|string',
            'father_name' => 'required|string',
            'gender' => 'required|string|in:male,female',
        ]);

        Information::create($validatedData);

        return redirect('/')->with('success', 'Information has been added ');

        // or like this
        // return redirect()->route('create-student', ['status' => 'Student data entry successfully created.']);
    }
}
