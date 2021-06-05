<?php

namespace App\Http\Controllers\admin;

use App\Department;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $departments = DB::table('departments')->get();

        return view('admin.department', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
        return view('admin.department.edit',['department' => $department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
        $validatedData = $request->validate($this->validationRules());

        $department->nom_department = $request->nom_department;
        $department->clubs_count = $request->clubs_count;
        $department->save();



        // $department->update($validatedData);
        return redirect()->route('department.edit', $department)->with('dep_update','Department updated Successfully');
        // return dd($department);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {

        $department->delete();
        return redirect()->route('department.index')->with('depDelete','Department has been deleted successfuly');
    }

    private function validationRules()
    {
        return [
            'nom_department' => 'required',
            'clubs_count' => 'required|gte:0',
        ];
    }
}
