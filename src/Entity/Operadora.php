<?php

namespace App\Entity;

use App\Repository\OperadoraRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Telefone;

/**
 * @ORM\Entity(repositoryClass=OperadoraRepository::class)
 */
class Operadora
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\OneToOne(targetEntity="Telefone", mappedBy="operadora")
    */

    private $telefone;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}
