<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::active()->paginate(6);
        return view('admin.teacher.index', compact('teachers'));
    }

    public function create()
    {   
        return view('admin.teacher.add');
    }

    public function store(Request $request)
    {
        $teacher = new Teacher();
        $data = $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'gender'=>'required',
            'experience'=>'required'
        ]);
        $teacher->saveteacher($data);

        return redirect('/teacher')->with('Successfully');
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.teacher.update')->with('teacher', $teacher);
    }

    public function update(Request $request, $id)
    {
        $teacher = new Teacher();
        $data = $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'experience'=>'required'
        ]);
        $data['id'] = $id;
        $teacher->updateteacher($data);
        
        return redirect('/teacher')->with('Successfully!');
    }

    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect('/teacher')->with('Successfully!');
    }
}
