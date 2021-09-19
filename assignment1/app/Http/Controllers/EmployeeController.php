<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function listofem()
    {
        $data = DB::table('employees')
            //->select('id', 'name as full_name', 'department')
            ->get();
        return view('listofemployees', compact('data'));
    }
    public function addemp(request $req)
    {
        /*
        $name = $req->name;
        $email = $req->email;
        $salary = $req->salary;
        $dob = $req->dob;
        $dept = $req->dept;
        $status = $req->status;
        $gender = $req->gender;
        */
        //dd($req);
        DB::table('employees')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'salary' => $req->salary,
            'date_of_birth' => $req->dob,
            'department' => $req->dept,
            'active' => $req->status,
            'gender' => $req->gender
        ]);
        return redirect('/listofem');
    }
    public function update($id)
    {
        $data2 = DB::table('employees')
            ->where('id', '=', $id)
            ->first();
        return view('updateemployee', compact('data2'));
    }
    public function updatefinal(request $req, $id)
    {
        $name = $req->name;
        $email = $req->email;
        $salary = $req->salary;
        $date_of_birth = $req->dob;
        $department = $req->dept;
        $active = $req->status;
        $gender = $req->gender;
        $data3 = DB::table('employees')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'email' => $email,
                'salary' => $salary,
                'date_of_birth' => $date_of_birth,
                'department' => $department,
                'active' => $active,
                'gender' => $gender
            ]);
        return redirect()->back()->with('msg', 'Updated');
    }
    public function delete($id)
    {
        DB::table('employees')->where('id', '=', $id)->delete();
        return redirect()->back()->with('msg', 'Deleted');
    }
}
