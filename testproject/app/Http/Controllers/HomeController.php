<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('others.home');
    }
    public function department($dept, $batch, $sec="no section selected")
    {
        echo "DEPARTMENT : $dept ";
        echo "<br>";
        echo "BATCH : $batch ";
        echo "<br>";
        echo "Section : $sec ";
        echo "<br>";
        return view('others.department',compact('dept','batch','sec'));
    }
}
