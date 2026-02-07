<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(){
        return view('employees.create');
    }

    public function store(Request $request){
       // echo '<pre>'; print_r($request->all()); die;    
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:employees',
            'mobile' => 'required|digits:10',
            'gender' => 'required',
            'address' => 'required',
            'city' => 'required',
            'pincode' => 'required|digits:6',
        ]);

        Employee::create($request->all());
        return redirect()->back()->with('success','Employee created successfully');
    }
}
