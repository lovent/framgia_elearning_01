<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lophoc;

class LophocController extends Controller
{
    public function index()
    {
        $lophocs = Lophoc::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.class.index', compact('classes'));
    }

    public function create()
    {
        return view('admin.class.add');
    }

    public function store(Request $request)
    {
        $lophoc = new Lophoc();
        $data = $this->validate($request, [
            'name'=>'required',
            'begin_at'=>'required',
            'number_of_lesson'=>'required',
            'available_slot'=>'required',
            'status'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'teacher_id'=>'required'
        ]);
        $lophoc->savelophoc($data);

        return redirect('/class')->with('Successfully!');
    }

    public function edit(Lophoc $lophoc)
    {
        return view('admin.class.update')->with('lophoc', $lophoc);
    }

    public function update(Request $request, $id)
    {
        $lophoc = new Lophoc();
        $data = $this->validate($request, [
            'name'=>'required',
            'begin_at'=>'required',
            'number_of_lesson'=>'required',
            'available_slot'=>'required',
            'status'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'teacher_id'=>'required'
        ]);
        $data['id']= $id;
        $lophoc->updatelophoc($data);

        return redirect('/class')->with('Successfully!');
    }

    public function destroy($id)
    {
        $lophoc = Lophoc::find($id);
        $class->delete();
        return redirect('/class')->with('Successfully!');
    }
}
