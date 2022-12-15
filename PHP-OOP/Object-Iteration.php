<?php
class Data implements IteratorAggregate{
    var string $satu = "1";
    public string $dua = "2";
    private string $tiga = "3";
    protected string $empat = "4";

    // public function getIterator() {
    //     $array = [
    //         "first" => $this->satu,
    //         "second" => $this->dua,
    //         "third" => $this->tiga,
    //         "fourth" => $this->empat
    //     ];

    //     // $iterator = new ArrrayIterator($array);
    //     // return $iterator;
    //     return new ArrayIterator($array);
    // }

    public function getIterator() {
        yield "first" => $this->satu;
        yield "second" => $this->dua;
        yield "third" => $this->tiga;
        yield "fourth" => $this->empat;
    }
}

$data = new Data();

foreach ($data as $key => $value) {
    echo "$key : $value\n"; // 1 & 2
}
