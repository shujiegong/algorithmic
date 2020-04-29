<?php
class AddDigits
{
    public function addDigits($num)
    {
        $len = strlen($num);
        if ($len == 1) {
            return $num;
        }   
        $arr = str_split($num);
        return $this->addDigits(array_sum($arr));
    }
}
$obj = new AddDigits;
$res = $obj->addDigits(38);
var_dump($res);
