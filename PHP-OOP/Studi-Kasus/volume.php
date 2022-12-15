<?php
class VolumeBalok {
    public int $panjang;
    public int $lebar;
    public int $tinggi;

    public function prosesVolume($panjang,$lebar,$tinggi){
        return $panjang * $lebar * $tinggi;
    }
}
class RunningBalok extends VolumeBalok {

}

$balok = new RunningBalok();
$res = $balok->prosesVolume(6,3.5,2);
echo $res;