<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\recharge;
use App\cards;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    //
	
	public function register(Request $request)
    {
		if($request->password!=$request->cpassword){
			 return redirect('/register')->with('signup_Success','Password Mismatch');
		}
      $user = User::create([
        'email' => $request->email,
        'phone' => $request->phone,
        'utype' => $request->utype,
        'password' => bcrypt($request->password),
      ]);

	  return redirect('/register')->with('signup_Success','Registration Successful. Please Login To Continue');
    }
	
	  public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            //return redirect()->intended('dashboard
			 if(Auth::user()->utype==1){ return redirect('/mdashboard')->with('login_success','Welcome '); }else{
				  return redirect('/dashboard')->with('login_success','Welcome ');
			 }
        }else{
			
			  return redirect('/')->with('login_error','Login Failed.Please Check YOur Credential');
		}
    }
	
	
	
	
	//Add new Airtime
	public function addAirtime(Request $request)
    {
		//print_r($request);
		/* $request->validate([
		'owner_id' => 'bail|required|max:11',
		'card_pin' => 'bail|required|max:100',
		'amount' => 'bail|required|max:11',
		'provider' => 'bail|required|max:100',
		]);
		 */
      $user = cards::create([
        'owner_id' => $request->owner_id,
        'card_pin' => $request->pin,
        'amount' => $request->amount,
        'provider' =>$request->provider,
      ]);
	  //return $user;
	 return redirect('/create_airtime')->with('add_airtime_Success','Airtime Added Successfully');
    }
	//edit Airtime
	public function editAirtime(Request $request)
    {
      $data =array(
        'card_pin' => $request->pin,
        'amount' => $request->amount,
        'provider' =>$request->provider,
      );
	 cards::where("id",$request->card_id)->update($data);
	 $id=$request->card_id;
	 return redirect('/edit_card/'.$id)->with('edit_airtime_Success','Airtime Updated Successfully');
    }
	
	
		
	//recharge Airtime
	public function recharge(Request $request)
    {
       recharge::create([
        'phone' => $request->phone,
        'card' => $request->card,
        'merchant' => $request->merchant
      ]);
	  $data=array( 
			'sold' =>1 
			);
		cards::where("id",$request->card)->update($data);
	 return redirect('/list_airtime')->with('recharge_airtime_Success','Airtime Recharged Successfully. Customers Account Will Be Credited');
    }
	
	
	
	//flag Airtime
	public function flagCard($id)
    {
	  $data=array( 
			'used' =>1 
			);
		cards::where("id",$id)->update($data);
	 return redirect('/airtime')->with('flag_airtime_Success','Airtime Marked Successfully');
    }
	
	//customer dashboard metrics
	public function customerDashboard()
    {
	 $total_card=DB::table('recharges')->where("phone","=",Auth::user()->phone)->count();
	 
	 
	 $total_spent=DB::table('recharges') ->join("cards","recharges.card","=","cards.id")->where("recharges.phone","=",Auth::user()->phone)->sum('amount'); 
	 
	 
	 $used=DB::table('recharges') ->join("cards","recharges.card","=","cards.id")->where("recharges.phone","=",Auth::user()->phone)->where("cards.used","=",1)->count(); 
	 
	  if($used>0 and $total_card>0){
		  $used_percent=($used/$total_card)*100;
	  }else{ $used_percent=0; }
	 
	 $unused=DB::table('recharges') ->join("cards","recharges.card","=","cards.id")->where("recharges.phone","=",Auth::user()->phone)->where("cards.used","=",0)->count();
	 
	 
	   if($unused>0 and $total_card>0){
		    $unused_percent=($unused/$total_card)*100;
	   }else{ $unused_percent=0; }
	  
	 return view('/dashboard',compact('total_card','used','unused','unused_percent','used_percent','total_spent'));
    }
	
	
	public function merchantDashboard()
    {
	 $total_card=DB::table('cards')->where("owner_id","=",Auth::user()->id)->count();
	 
	 $total_sold=DB::table('recharges')->where("merchant","=",Auth::user()->id)->count();
	 
	 if($total_sold>0 and $total_card>0){
	 	 $sold_percent=round(($total_sold/$total_card)*100,2);
	 }
	 else{
		 $sold_percent=0;
	 }
		 
	 $total_unsold=DB::table('cards')->where("sold","=",0)->where("cards.owner_id","=",Auth::user()->id)->count();
	 if($total_unsold>0 and $total_card>0){
	 $unsold_percent=round(($total_unsold/$total_card)*100,2);
	 }else{ $unsold_percent=0; }
	 
	 $total_amount_made=DB::table('recharges') ->join("cards","recharges.card","=","cards.id")->where("recharges.merchant","=",Auth::user()->id)->sum('amount'); 
	 
	  
	 return view('/mdashboard',compact('total_sold','total_unsold','total_card','unsold_percent','sold_percent','total_amount_made'));
    }
	
	
	//List Airtime
	public function listAirtime()
    {
		$users=user::all();
	 $cards=DB::table('cards')
	->where("owner_id","=",Auth::user()->id)->get();
	//return $cards;
	 return view('/list_airtime',compact('cards','users'));
    }
	
	
	public function getAirtime($id)
    {
	 $cards=DB::table('cards')
	->where("id","=",$id)->get();
	 return view('/edit_cards',['card'=>$cards]);
    }
	
	public function getCustomersAirtime($id)
    {
	 $cards=DB::table('cards')
	->where("id","=",$id)->get();
	 return view('/edit_cards',['card'=>$cards]);
    }
	
	public function getCustomersPurchase()
    {
	 $cards=DB::table('recharges')
	 ->join("cards","recharges.card","=","cards.id")
	->where("recharges.phone","=",Auth::user()->phone)->get();
	 return view('/cpurchase',['purchases'=>$cards]);
    }
}
