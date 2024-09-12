<?php
$paymentStatus = 1;

switch ($paymentStatus){
    case 1:
        echo 'paid';
        break;

    case 2:
    case 3:
        echo 'payment Declined';
        break;

    case 0:
        echo 'Pending Payment';
        break;


    default:
    echo 'Unknown Payment Status';
           
}
echo '<br>';
$paymentStatus = match ($paymentStatus) {
    1 =>'Paid' ,
   2,3  => 'Payment Declined' ,
   0 =>'Pending payment',
   default => 'Unknown payment Status',
};
echo $paymentStatus;
?>