<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Scopes\ActiveScope;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::active()->paginate(6);
        return view('admin.student.index', compact('students'));
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/student')->with('Successfully!');
    }
}
