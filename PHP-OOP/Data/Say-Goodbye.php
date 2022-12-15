<?php

// ParentClass > override by > Trait > override by > ChildClass

namespace Data\Traits;

trait SayGoodBye{
    function goodbye(?string $name): void {
        if (is_null($name)) {
            echo "Goodbye\n";
        } else {
            echo "Goodbye $name\n";
        }
    }
}

trait SayHello{
    function hello(?string $name): void {
        if (is_null($name)) {
            echo "Hello\n";
        } else {
            echo "Hello $name\n";
        }
    }
}

trait HasName{
    public string $name;
}

trait CanRun{
    public abstract function run(): void;
}

class ParentPerson {
    public function goodBye(?string $name): void {
        echo "Goodbye in person\n";
    }

    public function hello(?string $name): void {
        echo "Hello in person\n";
    }
}

trait All{
    use SayGoodbye, SayHello, HasName, CanRun;
}

class Person extends ParentPerson {
    // use SayGoodbye, SayHello, HasName, CanRun {
    //     // access level 
    //     // hello as private;
    //     // goodBye as private;
    // }

        use All;

    public function run():void {
        echo "Person $this->name is running\n";
    }

    // di utamakan
    // public function goodBye(?string $name): void {
    //     echo "Goodbye in person\n";
    // }

    // public function hello(?string $name): void {
    //     echo "Hello in person\n";
    // }
}