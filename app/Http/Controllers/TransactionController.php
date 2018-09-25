<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Repositories\User\EloquentUser;
use Validator;
class TransactionController extends Controller
{
    //
	public $transaction;
	public $successStatus = 200;
	public $response=array();
	
	 public function __construct(Transaction $transaction){

		$this->transaction=new EloquentUser($transaction);
		
	}
	public function getTransactionHistory(Request $request){
		$validator = Validator::make($request->all(), [
            'account_id' => 'required|integer',
        ]);
		if ($validator->fails()) { 
			$response['error']="TRUE";
			$response['error_message']=$validator->errors();
            return response()->json(['error'=>$response], 401);            
        }
		$key=array("from_account","to_account");
		$value=array($request->account_id,$request->account_id,);
		 $history= $this->transaction->getByTwoAttributes($key,$value);
		 $response['error']="FALSE";
		 $response['success_message']="History Fetched Successfully";
		 $response['data']=$history;
		 return response()->json(['success'=>$response], $this->successStatus); 
	}
}
