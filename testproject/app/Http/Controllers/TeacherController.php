<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function teacherhome()
    {
        $dept = DB::table('departments')
            ->select('id', 'dept_name')
            ->get();
        return view('teachers.home', compact('dept'));
    }
    public function teacheradd(Request $r)
    {
        $validated = $r->validate([
            'name' => 'required',
            'email' => 'required|Email|unique:teachers,email',
            'birth_date' => 'date|before_or_equal:now',
            //'birth_date' => 'date|before:-13 years',
            'gender' => 'required|in:"Male", "Female", "Other"',
            'dept' => 'required|exists:departments,id',
        ]);
        $obj = new Teacher();
        $obj->name = $r->name;
        $obj->email = $r->email;
        $obj->birth_date = $r->birth_date;
        $obj->gender = $r->gender;
        $obj->dept_id = $r->dept;
        $obj->save(); //ORM = Object Relational Mapping; Eloquent
        return redirect('/listoftea');
    }
    public function teacherlist()
    {
        //$tea = Teacher::all();
        $tea = DB::table('teachers as t')
            ->join('departments', 't.dept_id', '=', 'departments.id')
            ->select('t.*', 'departments.dept_name')
            ->get();
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
        $obj = Teacher::find($id);
        $obj->delete();
        return redirect()->back()->with('msg', 'Suuccessfully Deleted Account');
    }
}
