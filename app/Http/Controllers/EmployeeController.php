<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Supplier;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $employees = Employee::latest()->get();
        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $image = $request->file('photo');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);


        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        $employee->city = $request->input('city');
        $employee->experience = $request->input('experience');
        // $employee->nid_no = $request->input('nid_no');
        $employee->salary = $request->input('salary');
        $employee->vacation = $request->input('vacation');
        $employee->experience = $request->input('experience');
        $employee->photo = $imageName;
        $employee->save();

        session()->flash('Success', 'Employee Added');
        return redirect()->route('admin.employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('admin.employee.index')
            ->with('success','Supplier deleted successfully');
    }
}
