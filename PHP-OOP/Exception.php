<?php
require_once "Exception/Validation-Exception.php";
require_once "Data/Login-Request.php";
require_once "Helper/Validation.php";

$loginReq = new LoginRequest();
$loginReq->username = " ";
$loginReq->password = " ";

try {
    validateLoginRequest($loginReq);
    echo "VALID\n";
}// catch (ValidationException $exc) {
//     echo "Error : {$exc->getMessage()}\n";
// } catch (Exception $exc) {
//     echo "Error : {$exc->getMessage()}\n";}
catch (ValidationException | Exception $exc) {
    echo "Error : {$exc->getMessage()}\n";
    var_dump($exc->getTrace());
    echo $exc->getTraceAsString() . PHP_EOL;
} finally {
    echo "error / gk akan di eksekusi\n";
}

// $loginReq->username = "awok";
// $loginReq->password = "awok";
// validateLoginRequest($loginReq);