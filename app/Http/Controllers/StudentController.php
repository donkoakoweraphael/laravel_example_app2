<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = DB::table('students')->get();
        return view('pages.students.index', ['students' => $students]);
    }

    public function create()
    {
        return view('pages.students.create');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->age = $request->age;
        $student->sex = $request->sex;
        $student->save();
        return route('students.create');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
