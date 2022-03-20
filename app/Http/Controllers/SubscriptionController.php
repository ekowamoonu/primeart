<?php

namespace App\Http\Controllers;

use \App\User;
use \App\Transaction;
use \App\Subscription;

use Illuminate\Http\Request;
use Cookie;
use Auth;

use OVAC\LaravelHubtelPayment\Facades\HubtelPayment;

class SubscriptionController extends Controller
{
    public function makePayment(Request $request){
    	
    	$this->validate(request(),[
        	'payment_method'=>'required|string',
        	'wallet_number'=>'required|string',
          ]
        );

    	$payment_met = request('payment_method');
    	$wallet_num =  request('wallet_number');

    	if($payment_met=="vodafone-gh"){

    		$token = request('token');
    		$payment = HubtelPayment::ReceiveMoney()
                ->from($wallet_num)           
                ->amount(61)  //add .5 for fees     
                ->description('primeArt Subscription')  
                ->customerName('primeArt Subscriber')            
                ->channel('vodafone-gh')
                ->token($token)         
                ->run();   
    	}else{

    		$payment = HubtelPayment::ReceiveMoney()
                ->from($wallet_num)           
                ->amount(0.5)  //add .5 for fees     
                ->description('primeArt Subscription')  
                ->customerName('primeArt Subscriber')            
                ->channel($payment_met)        
                ->run();  
    	}

      $data = json_encode($payment);
     
      
      $new_data = json_decode($data,true);

      //echo $new_data['Data']['TransactionId'];
       
		 /*insert transaction into database*/
		  Transaction::create([
		            'trnsction_id'=>$new_data['Data']['TransactionId'],
		            'trnsction_status'=>"0001",
		        ]);

         return response()->json(["payment"=>$payment]); //obtain transaction id from this object

     }


    public function successCallback(Request $request){

      $data = $request->json()->all();
      $trans_id = $data['Data']['TransactionId'];

      $transaction = Transaction::where("trnsction_id","=",$trans_id)->first();
      $transaction->trnsction_status = $data['ResponseCode']; //update status with rep code
      $transaction->save();

      return response()->json(["trans_id"=>$trans_id]);//for testing purposes
    }

   /***********************/
    public function checkTransactionStatus(Request $request){
      
       //this method polls the transaction table to see if the recent transaction has been successful, it the sends and appropriate response for the js file to make the appropriate redirection.
      $transaction = Transaction::where("trnsction_id","=",request('transaction_id'))->first(); 
      $tst = $transaction->trnsction_status;

	       if( $tst == "0000"){//transaction successful
	       	    $sc_token = time();
              $user_id = Cookie::get('user_id');

	       	    //login user
              Auth::loginUsingId($user_id);

              //set user access = 1
              $user = User::find($user_id);
              $user->access=1;
              $user->seen=1; //seen status shows ur subscription status
              $user->save();

              //insert new subscription details
              $date_in_one_month  = \Carbon\Carbon::now()->addDays(31)->toDateTimeString();
              $grace_period_ends  = \Carbon\Carbon::now()->addDays(32)->toDateTimeString();
              $subscription = Subscription::create([
                "student_id"=> $user_id,
                "subscription_ends"=>$date_in_one_month,
                "renewal_grace_period_ends"=>$grace_period_ends
              ]);            

	       		return response()->json(["message"=>"success"]);
	       }
	       elseif($tst == "0001"){//transaction pending
	       		return response()->json(["message"=>"pending"]);
	       }

	       elseif($tst == "2050"||$tst == "2102"||$tst == "2102"){//insufficient_funds
	        	return response()->json(["message"=>"insufficient_funds"]);
	       }

	      elseif($tst == "2051"||$tst == "2103"||$tst == "2152"||$tst == "2200"||$tst == "2201"){//not registered
	      		return response()->json(["message"=>"not_registered"]);
	       }

	       elseif($tst == "2001"||$tst == "2100"||$tst == "2101"||$tst == "2154"){
	       //system payment processing,failure, incorrect pin, limit
	       		return response()->json(["message"=>"telecom_failure"]);
	       }
	       else{
	       	  return response()->json(["message"=>"primeart_failure"]);
	       }


    }
    /**************************************/

}
