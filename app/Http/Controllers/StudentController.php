<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index()
    {
        return view('index', ['student' => Student::all()]);
    }

    public function create()
    {
        return view('create');
    }

    public function new(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address
        ]);
        return redirect()->route('index');
    }

    public function edit($id)
    {
        return view('edit', ['student' =>Student::findOrFail($id), 'id' => $id]);
    }

    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
        ]);

        $student = Student::findOrFail($id);
        $student->update($input);

        return redirect()->route('index');
    }

    public function delete($id)
    {
        $estudiant = Student::findOrFail($id);
        $estudiant->delete();
        return redirect()->route('index');
    }
}