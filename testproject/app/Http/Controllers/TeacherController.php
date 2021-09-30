<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function teacherhome()
    {
        return view('teachers.home');
    }
    public function teacheradd(Request $r)
    {
        $obj = new Teacher();
        $obj->name = $r->name;
        $obj->email = $r->email;
        $obj->birth_date = $r->dob;
        $obj->gender = $r->gender;
        $obj->save(); //ORM = Object Relational Mapping; Eloquent
        return redirect('/listoftea');
    }
    public function teacherlist()
    {
        $tea = Teacher::all();
        return view('teachers.teacherlist', compact('tea'));
    }
    public function editteacher($id)
    {
        $tea = Teacher::find($id);
        return view('teachers.updateteacher', compact('tea'));
    }
    public function updateteacher(Request $r, $id)
    {
        $obj = Teacher::find($id);
        $obj->name = $r->name;
        $obj->email = $r->email;
        $obj->birth_date = $r->dob;
        $obj->gender = $r->gender;
        $obj->save(); //ORM = Object Relational Mapping; Eloquent
        return redirect()->back()->with('msg', 'Suuccessfully Updated Account Information');
    }
    public function deleteteacher($id)
    {
        $obj =Teacher::find($id);
        $obj->delete();
        return redirect()->back()->with('msg', 'Suuccessfully Deleted Account');
    }
}
