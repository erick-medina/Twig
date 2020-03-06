<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MasterRepository")
 */
class Master
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    private $weirdCapitalization;

    /**
     * Master constructor.
     * @param $weirdCapitalization
     */
    public function __construct(transform $weirdCapitalization)
    {
        $this->weirdCapitalization = $weirdCapitalization;
    }

    public function weirdCapitalization($input): string
    {
        return $this->weirdCapitalization;
    }

    public function getId(): ?int
    {
        return $this->id;
    }


}
