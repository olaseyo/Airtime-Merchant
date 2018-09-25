<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\Repositories\User\EloquentUser;
use Validator;
class LoanController extends Controller
{
	
	public $loan;
	public $successStatus = 200;
	public $response=array();
   	public function __construct(Loan $loan){
		$this->loan=new EloquentUser($loan);
		
	}
	
    public function applyForLoan(Request $request){
		$validator = Validator::make($request->all(), [
            'account_id' => 'required|integer',
            'loan_amount' => 'required|integer',
            'purpose' => 'required|string|max:500',
            'monthly_income' => 'required|integer',
            'payback_duration' => 'required|date',
        ]);
		if ($validator->fails()) { 
			$response['error']="TRUE";
			$response['error_message']=$validator->errors();
            return response()->json(['error'=>$response], 401);            
        }
			$input = $request->all(); 
			$trans = $this->loan->create($input); 
			 if(count($trans)>0){
					$response['error']="FALSE";
					$response['success_message']="Loan Application successfully";
					return response()->json(['success'=>$response], $this->successStatus);
		
						}
}
}
