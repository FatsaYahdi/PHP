<?php

class Student {
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void {
        $this->sample = $sample;
    }
    public function __clone() {
        unset($this->sample);
    }

    public function __toString(): string {
        return "Id : $this->id\nname : $this->name\nvalue : $this->value";
    }

    public function __invoke(...$args):void {
        $join = join(" ",$args);
        echo "Invoke arguments : $join\n";
    }
    public function __debugInfo() {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "ME",
            "ver" => "0.27-Stable",
        ];
    }
}