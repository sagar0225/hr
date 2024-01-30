<?php 
    namespace App\Services;

    use App\Models\Employee;
    use Exception;
    class EmployeeService{
        public $employeeService;
            public function __construct()
        {
            $this-> employeeService = new  Employee();     
        }
        public function saveEmployee($input)
        {
            try {
                    $empObj = new Employee();
                    $empObj->name = $input['name'];
                    $empObj->mobile_number = $input['mobile_number'];
                    $empObj->email =  $input['email'];
                    $empObj->fk_department_id =  $input['fk_department_id'];
                    $empObj->fk_designation_id =  $input['fk_designation_id']; 
                    $empObj->fk_role_id =  $input['fk_role_id'];
                    $response = $empObj->save();
        if ($response) {
                    return [
                        'status' => true,
                        'message' => 'Employee added successfully',
                        'data' => $response,
                    ];
                } else {
                    return [
                        'status' => false,
                        'message' => 'Unable to added Employee record',
                        'data' => null,
                    ];
                }
            }catch(Exception $e) {
                return [
                    'status' => false,
                    'message' => $e->getMessage(),
                    'data' => null,
                ];
            }
        }  
        public function EmplyoeeCount($input)
	{
		$query = Employee::select('id');
       
        $count = $query->count();
        return $count;
		

}    

    }





















?>