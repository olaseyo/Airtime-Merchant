<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserIdentityDb;
use App\Transaction;
use App\Repositories\User\EloquentUser;
use Validator;
class PaymentController extends Controller
{
	public $user;
	public $user_identity;
	public $transaction;
	public $successStatus = 200;
	public $response=array();
   	public function __construct(User $user,UserIdentityDb $user_identity,Transaction $transaction){
		$this->user=new EloquentUser($user);
		$this->user_identity=new EloquentUser($user_identity);
		$this->transaction=new EloquentUser($transaction);
		
	}
	public function getBalance($account_id){
		$bal=$this->user->getByAttribute("account_id", $account_id);	
			return $bal->account_balance;

	}
	
	public function checkBalance($account_id,$amount){
		$bal=$this->user->getByAttribute("account_id", $account_id);
		if($bal->account_balance<$amount){
			$response['error']="TRUE";
			$response['error_message']="Insufficient balance";
            die(response()->json(['error'=>$response], 401));	
		}else{
			return $bal->account_balance;
		}
	}
	
	public function validateUser($account_id){
		$user=$this->user->getByAttribute("account_id", $account_id);
		if(count($user)<1){
			$response['error']="TRUE";
			$response['error_message']="User not found";
            die(response()->json(['error'=>$response], 401));	
		}else{
			return true;
		}
	}
	
	public function getBalanceByPhone($phone){
		//get userdetails from user identity table in user table
		$user=$this->user_identity->getByAttribute("phone_one",$phone);
		//get balance
		$bal=$this->user->getByAttribute("idnumber",$user->idnumber);
		$bal_data=array("account_balance"=>$bal->account_balance,"idnumber"=>$user->idnumber);
		return $bal_data;

	}
	
	public function checkToken($account_id){
		
	}
	
	public function getCreatToken($account_id){
		
	}
	
	public function sendToPhoneNumber($phone,$amount,$account_id){
		
		$balance=$this->checkBalance($account_id,$amount);
		$sender_new_balance=$balance-$amount;
		//debit sender
		$update=$this->user->updateByAttribute("account_id",$account_id,array("account_balance"=>$sender_new_balance));
		$contact_balance=$this->getBalanceByPhone($phone);
		//die($contact_balance);
		$contact_new_balance=$contact_balance['account_balance']+$amount;
		//credit receiver
		$update=$this->user->updateByAttribute("idnumber",$contact_balance['idnumber'],array("account_balance"=>$contact_new_balance));
	}
	
	
	public function checkPhone($contact){
		$phone=$this->user_identity->getByAttribute("phone_one", $contact);
		if(count($phone)<1){
			$response['error']="TRUE";
			$response['error_message']="Phone does not exist";
            die(response()->json(['error'=>$response], 401));	
		}else{
			return array("phone"=>$phone->phone_one,"idnumber"=>$phone->idnumber);
		}
	}
	
	public function makePayment(Request $request){
		$validator = Validator::make($request->all(), [
            'account_id' => 'required|integer',
            'amount' => 'required',
            'method' => 'required',
            'description' => 'required',
            'contact' => 'required',
            'payment_token' => 'required',
           
        ]);
		if ($validator->fails()) { 
			$response['error']="TRUE";
			$response['error_message']=$validator->errors();
            return response()->json(['error'=>$response], 401);            
        }
		switch($request->method){
			case '1':
			
			$input = $request->all(); 
			
			$input['from_account']=$request->account_id;
			
			$phone=$this->validateUser($request->account_id);
			$phone=$this->checkPhone($request->contact);
			
			$toAccountId=$this->user->getByAttribute("idnumber",$phone['idnumber']);
			$input['to_account']=$toAccountId->account_id;
			//return $toAccountId;
			$trans = $this->transaction->create($input); 
			 if(count($trans)>0){
					$response['error']="FALSE";
					$response['success_message']="Money sent successfully";
					$this->sendToPhoneNumber($request->contact,$request->amount,$request->account_id);
					return response()->json(['success'=>$response], $this->successStatus); 
				}
			break;
		}
		
	}
	

}
