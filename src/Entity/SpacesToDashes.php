<?php


namespace App\Entity;


class SpacesToDashes implements transform
{
    public function transform(string $input) : string
    {
        $str = strtolower($input);
        return str_replace(' ', '-', $str);
    }

}
