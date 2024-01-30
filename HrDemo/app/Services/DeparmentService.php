<?php 
namespace App\Services;

use App\Models\Deparment;
use Exception;
class DeparmentService{
public $deparmentService;
            public function __construct()
        {
            $this-> deparmentService = new Deparment();     
        }
    public function DptCount($input)
	{
		$query = Deparment::select('id');
       
        $count = $query->count();
        return $count;
    }    
}











?>