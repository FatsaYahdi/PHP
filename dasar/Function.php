<?php

// normal

function sayHello() {
    echo "Hello" . PHP_EOL;
}
sayHello();


// location function

$i = true;

if ($i) {
    function hi() {
        echo "Hi" . PHP_EOL;
    }
}

hi();

// function argument

function hello($name) {
    echo "Hello $name" . PHP_EOL;
}

hello("Jawir");

// default

function helo($name = "JAWA") {
    echo "Hello $name" . PHP_EOL;
}

helo();
helo("Jawir");

// Kesalahan Default Argument Value

function i($firstName = "Anon", $lastName) {
    echo "Hello $firstName $lastName ";
}

// i("jawa"); // ERROR