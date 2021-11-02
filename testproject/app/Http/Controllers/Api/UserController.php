<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Department;

class UserController extends Controller
{
    //
    public function departmentsapi()
    {
        $departments = DB::table('departments')
            //->select('id', 'dept_name')
            ->get();
        return response()->json([
            'data' => $departments,
            'msg' => $departments ? 'Department Found' : 'No Department Found',
        ]);
    }
    public function searchbyid($id)
    {
        $department = DB::table('departments')
            ->where('id', '=', $id)
            ->first();
        return response()->json([
            'data' => $department,
            'msg' => $department ? 'Department Found' : 'No Department Found',
        ]);
    }
    public function storedept(Request $r)
    {
        $obj = new Department();
        $obj->dept_name = $r->dept_name;
        if ($obj->save()) {
            return response()->json([
                'data' => $obj,
                'msg' => $obj ? 'Department Inserted' : 'No Department Inserted',
            ]);
        }
    }
}
