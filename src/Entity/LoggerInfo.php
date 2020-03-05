<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LoggerRepository")
 */
class LoggerInfo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function logInfo(string $message):string
    {
        if (isset($_POST['sentence'])) {
            $logger = new Logger('info');
            $logger->pushHandler(new StreamHandler(__DIR__.'/logs/log.info'));
            $logger->info($message);
        }
        return $message;
    }
}
