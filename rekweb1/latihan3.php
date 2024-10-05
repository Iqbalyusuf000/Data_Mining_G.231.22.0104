<?php
$jsonobj = '{"35":"Peter", "Ben":37, "Joe":43}';

$obj = json_decode($jsonobj);

// mengakses nilai object
echo $obj->35;
echo $obj->Ben;
echo $obj->Joe;
?>  