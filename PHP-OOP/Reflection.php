<?php
require_once "Exception/Validation-Exception.php";
require_once "Data/Login-Request.php";
require_once "Helper/Validation-Util.php";

$request = new LoginRequest();
$request->username = "null";
$request->password = "null";
// ValidationUtil::validate($request);
ValidationUtil::validateReflection($request);

class RegisterUserRequest {
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "aw";
$register->address = "aw";
$register->email = "aw";
ValidationUtil::validateReflection($register);