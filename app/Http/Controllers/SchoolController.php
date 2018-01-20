<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\School;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::orderbyid()->paginate(6);
        return view('admin.school.index', compact('schools'));
    }

    public function create()
    {
        return view('admin.school.add');
    }

    public function store(Request $request)
    {
        $school = new School();
        $data = $this->validate($request, [
            'name'=>'required',
            'city'=>'required'
        ]);
        $school->saveschool($data);
        
        return redirect('/school')->with('Successfully');
    }

    public function edit(School $school)
    {
        return view('admin.school.update')->with('school', $school);
    }

    public function update(Request $request, $id)
    {
        $school = new School();
        $data = $this->validate($request, [
            'name'=>'required',
            'city'=>'required'
        ]);
        $data['id'] = $id;
        $school->updateschool($data);

        return redirect('/school')->with('Successfully');
    }

    public function destroy($id)
    {
        $school = School::find($id);
        $school->delete();
        return redirect('/school')->with('Successfully!');
    }
}
