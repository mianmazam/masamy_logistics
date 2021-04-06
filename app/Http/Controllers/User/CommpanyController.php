<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Order;
use App\Models\Trailer;
use App\Models\Truck;
use App\Models\Driver;
use App\Models\Deposit;
use Auth;
use Session;
use Carbon\Carbon;
use DateTime;
use URL;

class CommpanyController extends Controller{

//dashboard

    public function data(){
		$uid = Auth::user()->id;    
		$user=User::find($uid);
		$completeOrders = Order::where('user_id', $uid)->where('status', 'completed')->take(5)->get();
		$latestOrders = Order::where('user_id', $uid)->orderby('id', 'DESC')->take(5)->get();
	return view('users.dashboard',compact('user', 'completeOrders', 'latestOrders' ));		

    }

//TRAILERS

    public function trailers(){
    	$uid = Auth::user()->id; 
    	$user=User::find($uid);
    	$trailers = Trailer::where('user_id', $uid)->get();
    	return view('users.trailers',compact('user', 'trailers'));	
    }
    public function add_trailer(){
    	$uid = Auth::user()->id; 
    	$user=User::find($uid);
    	return view('users.ad_trailer',compact('user'));	
    }
    public function savetrailer(Request $request){
        return "ok";

    	$uid = Auth::user()->id; 
    	$user=User::find($uid);
    	$ad_trailer= new  Trailer;

    	$request->validate([
	    	'reg_no' => ['required', 'unique:trailers'],
	    	'fleet' => 'required',
	    	'status' => 'required',
		]);
		$ad_trailer->reg_no = $request->reg_no;
    	$ad_trailer->fleet = $request->fleet;
    	$ad_trailer->user_id = $user->id;
    	$ad_trailer->status = $request->status;
    	$qstatus = $ad_trailer->save();
    	
    	if($qstatus == true ) { 		
    		\Session::flash('message', 'Trailer Added Sucessfully');
        	return redirect()->back();
    	}else{
    		\Session::flash('message', 'Failed to add Trailer');
        	return redirect()->back();
    	}
    }

//TRUCKS

    public function trucks(){
    	$uid = Auth::user()->id; 
    	$user=User::find($uid);
    	$trucks = Truck::where('user_id', $uid)->orderby('id', 'DESC')->get();
    	return view('users.trucks',compact('user', 'trucks'));	
    }
    public function create_trucks(){
    	$uid = Auth::user()->id; 
    	$user=User::find($uid);
    	return view('users.ad_truck',compact('user'));	
    }
    public function save_trucks(Request $request){

    	$uid = Auth::user()->id; 
    	$user=User::find($uid);
    	$ad_truck= new  Truck;

    	$request->validate([
	    	'reg_no' => ['required', 'unique:trucks'],
	    	'truck_reg_date'=> 'required',
	    	'truck_make' => 'required',
	    	'truck_model'=> 'required',
	    	'truck_color' => 'required',
	    	'trailer1_id' => 'required',
	    	'trailer2_id' => 'required',
	    	'fleet_number' => 'required',
	    	'status' => 'required',
		]);
    	$ad_truck->reg_no = $request->reg_no;
    	$ad_truck->truck_reg_date = $request->truck_reg_date;
    	$ad_truck->user_id = $user->id;
    	$ad_truck->truck_make = $request->truck_make;
    	$ad_truck->truck_model = $request->truck_model;
    	$ad_truck->truck_color = $request->truck_color;
    	$ad_truck->trailer1_id = $request->trailer1_id;
    	$ad_truck->trailer2_id = $request->trailer2_id;
    	$ad_truck->fleet_number = $request->fleet_number;
    	$ad_truck->status = $request->status;
    	$qstatus = $ad_truck->save();
    	if($qstatus == true ) { 		
    		\Session::flash('message', 'Truck Added Sucessfully');
        	return redirect()->back();
    	}else{
    		\Session::flash('message', 'Failed to add Truck');
        	return redirect()->back();
    	}
    }

//DRIVERS


    public function drivers(){
    	$uid = Auth::user()->id; 
    	$user=User::find($uid);
    	$drivers = Driver::where('user_id', $uid)->orderby('id', 'DESC')->get();
    	return view('users.drivers',compact('user', 'drivers'));	
    }
public function ad_driver(){
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users\ad_driver',compact('user'));  
    }
    public function save_drivers(Request $request){
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        $ad_driver= new  Driver;

        $request->validate([
            'driver_first_name' => ['required'],
            'driver_last_name'=> 'required',
            'passport_no' => ['required', 'unique:Driver' ],
            'driver_date_of_birth'=> 'required',
            'remark' => 'required',
            'cell_no' => 'required',
            'is_temporary' => 'required',
            'terms' => 'required',

        ]);
        dd($request->all());
        $ad_driver->driver_first_name = $request->driver_first_name;
        $ad_driver->driver_last_name = $request->driver_last_name;
        $ad_driver->passport_no = $request->passport_no;
        $ad_driver->driver_date_of_birth = $request->driver_date_of_birth;
        $ad_driver->remark = $request->remark;
        $ad_driver->cell_no = $request->cell_no;
        $ad_driver->is_temporary = $request->is_temporary;
        $ad_driver->user_id = $uid;
        $ad_driver->terms = $request->terms;

        $qstatus = $ad_truck->save();
        if($qstatus == true ) {         
            \Session::flash('message', 'Truck Added Sucessfully');
            return redirect()->back();
        }else{
            \Session::flash('message', 'Failed to add Truck');
            return redirect()->back();
        }
    }

//cleansing agents
    public function agents(){
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('j.agents',compact('user'));  
    }
//DEPOSITS

    public function deposit(){
    	$uid = Auth::user()->id; 
    	$user=User::find($uid);
    	$deposits = Deposit::get();
    	return view('users.deposits',compact('user', 'deposits'));	
    }
    public function deposit_load(){
    	$uid = Auth::user()->id; 
    	$user=User::find($uid);
    	return view('users.load_deposits',compact('user'));	
    }
    public function confirm(Request $request)
    {
    	// dd( $request->all() );
    	$uid = Auth::user()->id; 
    	$user=User::find($uid);
    	return view('users.conferm_deposit',compact('user', 'request'));	
    }

	public function add_deposit(Request $request){
    	$uid = Auth::user()->id; 
    	$new_deposit = new Deposit;
        // dd($request->all());
    	$new_deposit->date = new DateTime('now');
    	$new_deposit->ccy = $request->ccy;
        $new_deposit->user_id = $uid;
        $new_deposit->status = "pending";
        $new_deposit->reason = "";
        $new_deposit->bank = $request->deposited_into_bank_name;
        $new_deposit->amount = $request->amount;
        $new_deposit->refrance = $request->reference_used;
        $query_Status = $new_deposit->save();
        if($query_Status == true ) {    
          return redirect()->route('');
        }else{
            \Session::flash('message', 'Failed to Deposit');
            return redirect()->back();
        }
    }

    public function users($value='')
    {
    	$uid = Auth::user()->id;
    	$user=User::find($uid); 
    	return view('users.users',compact('user'));	
    }

     public function orders(){
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        $orders = Order::where('user_id', $uid)->orderby('id', 'DESC')->get();
        return view('users.orders',compact('user', 'orders'));  
    }
    public function ad_order(){
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.ad_order',compact('user')); 
    }
    
    public function save_order(Request $request){
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        $ad_driver= new  Driver;

        $request->validate([
            'driver_first_name' => ['required'],
            'driver_last_name'=> 'required',
            'passport_no' => ['required', 'unique:Driver' ],
            'driver_date_of_birth'=> 'required',
            'remark' => 'required',
            'cell_no' => 'required',
            'is_temporary' => 'required',
            'terms' => 'required',

        ]);
        dd($request->all());
        $ad_driver->driver_first_name = $request->driver_first_name;
        $ad_driver->driver_last_name = $request->driver_last_name;
        $ad_driver->passport_no = $request->passport_no;
        $ad_driver->driver_date_of_birth = $request->driver_date_of_birth;
        $ad_driver->remark = $request->remark;
        $ad_driver->cell_no = $request->cell_no;
        $ad_driver->is_temporary = $request->is_temporary;
        $ad_driver->user_id = $uid;
        $ad_driver->terms = $request->terms;

        $qstatus = $ad_truck->save();
        if($qstatus == true ) {         
            \Session::flash('message', 'Truck Added Sucessfully');
            return redirect()->back();
        }else{
            \Session::flash('message', 'Failed to add Truck');
            return redirect()->back();
        }
    }
//diesal
    public function diesal()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.diesal_prices',compact('user'));
    }
//providers
    public function provider()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.providers',compact('user'));
    }

//Trips 
    public function myTrips()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.myTrips',compact('user'));
    }
    public function template()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.tripTemplate',compact('user'));
    }
    public function standTemp()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.standTemp',compact('user'));
    }
    public function unauthTrip()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.unauthTrip',compact('user'));
    }
    public function orderlist()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.order-list',compact('user'));
    }
    public function unauth_orders()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.unauth_orders',compact('user'));
    }
    public function order_history()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.order-history',compact('user'));
    }
    public function acBal()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.ac-bal-detail',compact('user'));
    }
    public function extended_order_history()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.extended_order_history',compact('user'));
    }
    public function users_details()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.users',compact('user'));
    }
    public function etollstatement()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.etollstatement',compact('user'));
    }
    public function etrolltrans()
    {
        $uid = Auth::user()->id; 
        $user=User::find($uid);
        return view('users.etrolltrans',compact('user'));
    }


}



