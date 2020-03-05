<?php


namespace App\Entity;


class Capitalize implements transform
{
    public function transform(string $input) : string
    {
        $newStr = '';
        foreach(str_split($input) as $index => $char) {
            $newStr .= ($index % 2) ? strtolower($char) : strtoupper($char);
        }
        return $newStr;
    }

}