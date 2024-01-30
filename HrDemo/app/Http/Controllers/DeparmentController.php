<?php

namespace App\Http\Controllers;
use App\Services\DeparmentService;
use Illuminate\Http\Request;
use App\Models\Deparment;
class DeparmentController extends Controller
{

    public $deparmentService;
    public function __construct()
    {
        $this->deparmentService = new DeparmentService();
        
    
    }
    public function DeparmentCount(Request $request)
    {
        $input=$request->all();
        $emailTemplateTitleList = $this->deparmentService->DptCount($input);
        return response()->json([
            'status' => 'true',
            'message' => 'Dept count',
            'Total Deparment count'=> $emailTemplateTitleList
        ]);
    
} 
}
