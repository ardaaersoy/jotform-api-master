<?php

include "../jotform-api-php-master/JotForm.php";
$jotformAPI = new JotForm("74c454a3c60e96fd9a64fbd216f024c1");

$submissions = $jotformAPI->getFormSubmissions("91633521962963");
var_dump($submissions);
