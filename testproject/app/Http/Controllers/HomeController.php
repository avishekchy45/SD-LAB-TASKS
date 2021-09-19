<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        return view('others.home');
    }
    public function department($dept, $batch, $sec = "no section selected")
    {
        echo "DEPARTMENT : $dept ";
        echo "<br>";
        echo "BATCH : $batch ";
        echo "<br>";
        echo "Section : $sec ";
        echo "<br>";
        return view('others.department', compact('dept', 'batch', 'sec'));
    }
    public function studentadd(request $req)
    {
        //dd($req);
        $name = $req->name;
        $department = $req->dept;
        //echo $name, $department;
        DB::table('students')->insert([
            'name' => $name,
            'department' => $department
        ]);
        return redirect()->back();
    }
    public function studentlist(request $req)
    {
        $data = DB::table('students')
            ->select('id', 'name as full_name', 'department')
            ->get();
        return view('others.studentlist', compact('data'));
    }
    public function update($id)
    {
        $data2 = DB::table('students')
            ->where('id', '=', $id)
            ->first();
        return view('others.updatestudent', compact('data2'));
    }
    public function updatefinal(request $req, $id)
    {
        $name = $req->name;
        $department = $req->dept;
        $data3 = DB::table('students')
            ->where('id', $id)
            ->update(['NAME' =>  $name, 'department' =>  $department]);
        return redirect()->back()->with('msg', 'Updated');
    }
    public function delete($id)
    {
        DB::table('students')->where('id', '=', $id)->delete();
        return redirect()->back()->with('msg', 'Deleted');
    }
}
