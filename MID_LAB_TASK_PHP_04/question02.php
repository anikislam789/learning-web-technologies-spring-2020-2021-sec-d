<?php

$vat=15;
$afterprice=100;
$payingvat=($afterprice/100)*$vat;
$totalprice=($afterprice+$payingvat);

echo ($totalprice);

?>