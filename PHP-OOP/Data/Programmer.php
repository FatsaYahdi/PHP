<?php

class Programmer {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer {

}

class FrontendProgrammer extends Programmer {

}

class Company {
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $pro) {
    if($pro instanceof Backendprogrammer) :
        echo "Hello Backend $pro->name\n";
    elseif ($pro instanceof FrontendProgrammer) : 
        echo "Hello Frontend $pro->name\n";
    elseif ($pro instanceof Programmer) : 
        echo "Hello Programmer $pro->name\n";
    endif;
}