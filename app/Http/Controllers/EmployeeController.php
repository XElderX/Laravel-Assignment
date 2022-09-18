<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployee;
use App\Http\Requests\UpdateEmployee;
use App\Http\Resources\EmployeeResource;
use App\Models\Company;
use App\Models\Employee;
use App\Notifications\NewEmployeeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EmployeeResource::collection(Employee::all());
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
    public function store(StoreEmployee $request)
    {
        $employee = Employee::create($request->validated());
        $company = Company::find($employee->company);
        $company->notify(new NewEmployeeNotification());
        return response()->json([
            'status' => 'OK', 'A new employee:' =>  $employee,
            'email was send to company: ' => $company
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return new EmployeeResource($employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployee $request, Employee $employee)
    {
        $data = $request->validated();
        $employee->fill($data);
        return ($employee->save() == 1) ?
            response()->json(['success' => 'success'], 200) :
            response()->json(['error' => 'Updating can\'t be done successfully'], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($employee)
    {

        return (Employee::destroy($employee) == 1) ?
            response()->json(['success' => 'success'], 200) :
            response()->json(['error' => 'deleting from database was not successful'], 500);

        // $employee = Employee::findOrFail($employee);
        // if($employee->delete()) {
        //     return new EmployeeResource($employee);
        // }

    }
    public function getByCompany($company_name)
    {

        // $fillteredData = DB::table('employees')
        // ->join('companies','employees.company','=','companies.id')
        // ->where('companies.name', 'like', '%'. $company_name .'%')
        // ->get();
        $collection = EmployeeResource::collection(Employee::all());
        $company = Company::where('name', 'like', '%' . $company_name . '%')
            ->value('id');
        $filtered = $collection->where('company', $company)->values()->all();

        return $filtered;
    }
}
