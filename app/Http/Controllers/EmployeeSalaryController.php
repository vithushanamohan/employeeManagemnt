<?php

namespace App\Http\Controllers;
use App\Models\EmployeeSalary;
use Illuminate\Http\Request;

class EmployeeSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeesalarys=EmployeeSalary::all();
        return view('employeesalarys.index',compact($employeesalarys));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employeesalarys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        EmployeeSalary::create($request->all());

        return redirect()->route('employeesalarys.index')
            ->with('success', 'employeesalary created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employeesalarys=EmployeeSalary::find($id);
        return view('employeesalarys.show', compact('employeesalarys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employeesalary=EmployeeSalary::find($id);
        return view('employeesalarys.edit', compact('employeesalary'));
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
        
        $employeesalary=EmployeeSalary::find($id);
        $employeesalary->update($request->all());
        return redirect()->route('employeesalarys.index')
            ->with('success', 'employeesalary updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employeesalary=EmployeeSalary::find($id);

        $employeesalary->delete();
        return redirect()->route('employeesalarys.index')
            ->with('success', 'employeesalary deleted successfully');
    }
}
