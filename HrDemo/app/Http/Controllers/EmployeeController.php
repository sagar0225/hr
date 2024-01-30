<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Services\EmployeeService;
class EmployeeController extends Controller
{
    public $employeeservice;
    public function __construct()
    {
        $this->employeeservice = new EmployeeService();
        
    
    }
    public function store(Request $request)
    {
        try {
            $validateUser = Employee::make(
                $request->all(),
                [
                    'name'=> 'required',
                    'mobile_number'=>'required',
                    'email'=>'requird',
                    'fk_department_id'=> 'required',
                    'fk_designation_id' => 'required',
                    'fk_role_id' => 'required',
                ]
            );
            if (!$validateUser) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }
            $input = $request->all();
            //dd( $input);
            // $empService = Employee::where('email', $input['email'])->first();
            // //dd( $empService);
            // if ($empService) {
            //     return response()->json([
            //         'status' => false,
            //         'message' => 'Email  is already exists',
            //     ], 400);
            // }
            $result = $this-> employeeservice->saveEmployee($input);
           // dd($result);
            if ($result['status']) {
                return response()->json([
                    'status' => true,
                    'message' => $result['message'],
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => $result['message'],
                ], 500);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function empCount(Request $request)
    {
        $input=$request->all();
        $emailTemplateTitleList = $this->employeeservice->EmplyoeeCount($input);
        return response()->json([
            'status' => 'true',
            'message' => 'Emp count',
            'Total Employee count'=> $emailTemplateTitleList
        ]);
    
}
    
}
