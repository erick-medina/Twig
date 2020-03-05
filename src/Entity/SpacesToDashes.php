<?php


namespace App\Entity;


class SpacesToDashes implements transform
{
    public function transform(string $input): string
    {
        $str = strtolower($input);
        $spacesToDashes = str_replace(' ', '-', $str);
        $logMessage = new LoggerInfo();
        $logMessage->logInfo($spacesToDashes);
        return $spacesToDashes;

    }

}
