<?php
include('inc/connect.php');


/////////////// COLLECT PAYMENT DATA FROM DB FOR PAYMENT PURPOSE /////////////////////////////////


$sql ="SELECT * FROM payment WHERE tran_code='".$_SESSION['tran_code']."'";
 $query  = mysqli_query($con, $sql);
 $row= mysqli_fetch_array($query);


require 'src/autoload.php';
$email = $row["email"]; 
$amount= $row["amount"]; 
$amountinkobo =intval($amount)*100;
$reference = (rand(100000000,999999999)%100000000);
$reference = "PS".$reference;




$paystack = new Yabacon\Paystack("sk_test_488cd3c1fc20a903c84e9a25e6b3ab0b033a65f8");
    try
    {
      $tranx = $paystack->transaction->initialize([
        'amount'=>$amountinkobo,       // in kobo
        'email'=>$email,         // unique to customers
        'reference'=>$reference, // unique to transactions
      ]);
    } catch(\Yabacon\Paystack\Exception\ApiException $e){
      print_r($e->getResponseObject());
      die($e->getMessage());
    }


    // store transaction reference so we can query in case user never comes back
    // perhaps due to network issue
    //save_last_transaction_reference($tranx->data->reference);

    // redirect to page so User can pay
    header('Location: ' . $tranx->data->authorization_url);
    



    ?>