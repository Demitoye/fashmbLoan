<?php

 $reference = $_GET['ref']; 

    $mysql_hostname = 'localhost';
    $mysql_username = 'root';
    $mysql_password = '';
    $mysql_dbname = 'fashmb_db';


    $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        /*** $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        /*** prepare the select statement ***/
         $stmt = $dbh->prepare("SELECT * FROM payment WHERE reference = '$reference' ");
         
        $stmt->execute();

      while($row = $stmt->fetch()) {
            
          

   
      $email = $row['email'];
      $amount = $row['amount'];
      $reference = $row['reference'];
     
       
  
    
        }



/////////////// COLLECT PAYMENT DATA FROM DB FOR PAYSTACK /////////////////////////////////


require 'paystack/src/autoload.php';
$email = $email; 
$amount= $amount;  
$amountinkobo =intval($amount)*100;
$reference = $reference;


 


$paystack = new Yabacon\Paystack("sk_test_ced087cb6616d750c132a5f856b3fe8fb08c4344");
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