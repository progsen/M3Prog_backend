<?php
include "functions.php";

$db = connectDatabase($user, $password, $database);
$email = sendEmail('h.braun@ma-web.nl', "Hoi", "....");
writeLogMessage('Error!');


