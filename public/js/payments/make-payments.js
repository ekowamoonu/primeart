$(function(){
      $(".make-payment-button").click(function(e){

	  			$.ajaxSetup({
	              headers:{
	                    'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
	              }
	            });//end ajax setup
              
	              e.preventDefault();
	 
                  
                  $(".make-payment-button").html("<i class='fa fa-spinner fa-spin'></i>");
	              
	                var processing_url = "/make-payment";


	                  $.ajax({
	                        url:processing_url,
	                        type:'POST',
	                        data: new FormData($("#make-payment-form")[0]),
	                        dataType:'json',
	                        contentType: false,
                			processData: false,
	                        beforeSend: function(xhr){
	                              xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));
	                        },//pass csrf token for verification in laravel
	                        success:function(data){
	                        	//console.log(data.payment.Data.TransactionId);
	                        	$(".make-payment-button").html("<i class='fa fa-spinner fa-spin'></i> Awaiting confirmation...");
	                        	$("#transaction_id").val(data.payment.Data.TransactionId);	
	                        	//run ajax timer to check state of transaction every two seconds
	                        	setInterval(checkTransactionEveryTwoSeconds,10000);	
	                        		
	                        },
	                        error:function(data){
	                        	//$(".make-payment-button").html("<i class='fa fa-spinner fa-spin'></i> Awaiting your confirmation...");
	                            console.log("firstreqactfai");
	                            window.location="/errors";
	                        	$(".make-payment-button").html("<i class='fa fa-check'></i> Make payment");
	       						//setInterval(checkTransactionEveryTwoSeconds,2000);
	                        }

	                  });//end ajax function        


      });


      	/**************************************************/
	      $("#payment-method").change(function(){
	         
	         var payment_method = $(this).val();

	         if(payment_method=="vodafone-gh"){
	         	$(".token-input-for-vodafone").show();
	         	$("#payment-container").attr("style","margin-top:-1.5em;");
	         }else{
	         	$(".token-input-for-vodafone").hide();
	         	$("#payment-container").attr("style","margin-top:2em");
	         }

	      });

	     

  /***************************************************************************/
	    function checkTransactionEveryTwoSeconds(){


	  			$.ajaxSetup({
	              headers:{
	                    'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
	              }
	            });//end ajax setup
              
               // console.log($("#transaction_id").val());
                 var checking_url = "/check-transaction-status";

                 var formData = {
                 		transaction_id:$("#transaction_id").val()
                 };


	                  $.ajax({
	                        url:checking_url,
	                        type:'POST',
	                        data: formData,
	                        dataType:'json',
	                        beforeSend: function(xhr){
	                              xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));
	                        },//pass csrf token for verification in laravel
	                        success:function(data){
	                        	if(data.message=="success"){
	                        		window.location="/success";
	                        		console.log("success");
	                        	}
	                        	else if(data.message=="pending"){
	                        		console.log("pending");
	                        	}
	                        	else if(data.message=="insufficient_funds"){
	                        		console.log("insufficient_funds");
	                        		window.location="/errors";
	                        	}
	                        	else if(data.message=="not_registered"){
	                        		console.log("not_registered");
	                        		window.location="/errors";
	                        	}
	                        	else if(data.message=="telecom_failure"){
	                        		console.log("telecom_failure");
	                        		window.location="/errors";
	                        	}
	                        	else{//primeart failure
	                        		console.log("primeart failure");
	                        		window.location="/errors";
	                        	}	
	                        },
	                        error:function(data){
	                        	alert("Oops. Please refresh your page.");
	                        }

	                  });//end  transaction check ajax function 

	      }

  /**************************************************************************/

});