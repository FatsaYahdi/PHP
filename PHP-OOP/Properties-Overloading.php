<?php
class Zero {
    private array $properties = [];
    public function __get($name) {
        return $this->properties[$name];
    }
    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool{
        return isset($this->properties[$name]);
    }

    public function __unset($name){
        unset($this->properties[$name]);
    }
    public function __call($name, $args) {
        $join = join(",",$args);
        echo "Call function $name with arguments $join\n";
    }
    public static function __callStatic($name, $args) {
        $join = join(",",$args);
        echo "Call Static function $name with arguments $join\n";
    }
}
$zero = new Zero();
$zero->fn = "awp";
$zero->mn = "awp";
$zero->ln = "awp";
echo "First Name : $zero->fn\n";
echo "Middle Name : $zero->mn\n";
echo "Last Name : $zero->ln\n";
$zero->sayHello("AW","wlee");
Zero::sayHello("AW","wlee");