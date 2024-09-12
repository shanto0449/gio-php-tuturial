<?php
$paymentstatus = 'declined';

switch($paymentstatus){
    case 'paid':
        echo 'Paid';
        break;

    case 'declined':
        echo 'Payment Declined';
        break;


    case 'pending':
        echo 'Payment Pending';
        break;

    default:
    echo 'Unknown Payment Status';
}


?>