<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\employee_resource;
use App\Models\employee;
class Employee_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$data = employee::with('designations')->get(); 
		 
        return response()->json(array("emp" => employee_resource::collection($data)));
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
		 $emp = new Employee;
		 
		 
		 $emp->name = $request->name;
		  $emp->designation_id = $request->designation_id;
		   $emp->gender = $request->gender;
		    $emp->image_url = $request->image_url;
			 $emp->salary	 = $request->salary	;
			 
		
		if($emp->save()){
		 
		return response()->json(array('success' => true, 'last_insert_id' => $emp->id), 200);
		}
		
		return response()->json(array('success' => false), 402);
		
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
		   
		$emp_update = employee::find($id);
		
		
		$emp_update->name = $request->name;
		$emp_update->designation_id = $request->designation_id;
		$emp_update->gender = $request->gender;
		$emp_update->image_url = $request->image_url;
		$emp_update->salary = $request->salary;
		$emp_update->save();
		
		return response()->json(array('success' => true), 200);
		
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
		if(employee::destroy($id)){
			return response()->json(array('success' => true), 200);
		}
		return response()->json(array('success' => false), 2);
    }
}
