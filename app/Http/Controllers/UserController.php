<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\User\EloquentUser;
use App\UserIdentityDb;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    //
	public $user;
	public $user_identity;
	public $successStatus = 200;
	public $response=array();
	public function __construct(User $user,UserIdentityDb $user_identity){
		$this->user=$user;
		$this->user_identity=$user_identity;
	}
	
	
	public function login(Request $request){ 
	$validator = Validator::make($request->all(), [
            'pin' => 'required|integer',
            'password' => 'required',
           
        ]);
if ($validator->fails()) { 
			$response['error']="TRUE";
			$response['error_message']=$validator->errors();
            return response()->json(['error'=>$response], 401);            
        }
        if(Auth::attempt(['pin' => request('pin'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
			$response['error']="TRUE";
			$response['error_message']="Login failed! Please Check your credential;";
            return response()->json(['error'=>$response], 401);            
        } 
    }
	
	
	public function registerUser(Request $request){
            $validator = Validator::make($request->all(), [
            'device_info' => 'required',
            'password' => 'required',
            'pin' => 'required|integer',
            'merchantOrmserOrAdmin' => 'required',
            'email' => 'required|string|email|max:50|unique:user_identity_dbs',
            'firstname' => 'required|string|max:50',
            'othername' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'gender' => 'required|string|max:50',
            'marital_status' => 'required|string|max:50',
            'citizenship' => 'required|string|max:50',
            'occupation' => 'required|string|max:50',
            'continent' => 'required|string|max:50',
            'phone_one' => 'required|string|max:50',
        ]);
if ($validator->fails()) { 
			$response['error']="TRUE";
			$response['error_message']=$validator->errors();
            return response()->json(['error'=>$response], 401);            
        }
		
	
		$input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
		
		
		 $user = $this->user_identity->create($input); 
        
			
		if($user->id>0){
			$input['idnumber']=$user->id;
			//$request->request->add(['idnumber', $user->id]);
			$userid = $this->user->create($input); 
	   //checks if the current request is ok
			   if($userid->id>0){
					$response['error']="FALSE";
					$response['success_message']="User account created successfully";
					return response()->json(['success'=>$response], $this->successStatus); 
				}else{ 
					//rollback first transaction
					$this->user_identity->delete($user->id);
				}
		
	}
}
}
