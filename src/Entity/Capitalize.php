<?php


namespace App\Entity;


class Capitalize implements transform
{
    public function transform(string $input): string
    {
        $newStr = '';
        foreach(str_split($input) as $index => $char) {
            $newStr .= ($index % 2) ? strtolower($char) : strtoupper($char);
        }
        $logMessage = new LoggerInfo();
        $logMessage->logInfo($newStr); // newStr contains the output of the capitalization which I use for storing in the log.info
        return $newStr;
    }

}