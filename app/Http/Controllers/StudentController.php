<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('administrator.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrator.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'id_number' => 'required',
            'address' => 'required',
            'birthdate' => 'required',
        ]);

        $student = Student::create($validatedData);

        return redirect()->route('students.index', $student->id)
            ->with('success-message', 'Student Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('administrator.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('administrator.students.edit', [
            "student" => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'id_number' => 'required',
            'address' => 'required',
            'birthdate' => 'required',
        ]);

        $student->update([
            'name' => $request->name,
            'id_number' => $request->id_number,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
        ]);

        return redirect(route('students.index'))->with('success-message', 'Student Updated Successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')
            ->with('danger-message', 'Student deleted successfully');
    }
}
