<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class TestController extends Controller
{
    public function home(){

        $employees = Employee::all();    
        return view('pages.home', compact('employees'));
    }

    public function employee($id){

        $employee = Employee::findOrFail($id);
        return view('pages.employee', compact('employee'));
    }

    public function delete($id){

        $employee = Employee::findOrFail($id);
        $employee -> delete();
        return redirect() -> route('home');
    }
}
