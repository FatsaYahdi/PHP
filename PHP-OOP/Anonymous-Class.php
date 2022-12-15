<?php
interface HelloWorld { 
    function sayHello() : void;
}

$a = new class("nah") implements HelloWorld {

    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function sayHello(): void{
        echo "Hello $this->name\n";
    }
};

// class Sample implements HelloWorld {
//     function sayHello(): void {
//         echo "Hello World" . PHP_EOL;
//     }
// }

$a->sayHello();