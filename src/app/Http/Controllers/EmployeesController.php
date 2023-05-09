<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        // $employees = DB::table('employees')->get();
        // $employees = Employee::all();
        $employees = Employee::orderBy('id', 'asc')->get();
        return view('employees.index',['employees' => $employees]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        // DB::table('employees')->insert([
        //     'employee_name' => $request->input('employee_name'),
        //     'section' => $request->input('section'),
        //     'salary' => $request->input('salary'),
        // ]);

        $employee = new Employee;
        $employee->employee_name = $request->input('employee_name');
        $employee->section = $request->input('section');
        $employee->salary = $request->input('salary');
        $employee->save();

        return view('employees.store');
    }

    public function search(Request $request)
    {
        $search_word = $request->input('employee_name_like');
        $employees = Employee::where('employee_name','LIKE',"%{$search_word}%")->get();
        return view('employees.index',['employees' => $employees]);
    }

    public function detail($id)
    {
        return view('employees.detail', $id);
    }
}
