<?php

namespace App\Http\Controllers;
use App\Advanced_Salary;
use App\Employee;
use Illuminate\Http\Request;

class AdvancedSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advanced_salaries = Advanced_Salary::latest()->with('employee')->get();
        return view('admin.advanced_salary.index', compact('advanced_salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $employees = Employee::all();
        return view('admin.advanced_salary.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $advanced_salary = new Advanced_Salary();
        $advanced_salary->employee_id = $request->input('employee_id');
        $advanced_salary->month = $request->input('month');
        $advanced_salary->year = $request->input('year');
        $advanced_salary->advanced_salary = $request->input('advanced_salary');
        $advanced_salary->save();


        session()->flash('Advanced Salary.','Successfully Added');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
