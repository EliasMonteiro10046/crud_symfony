<?php

namespace App\Entity;

use App\Repository\TelefoneRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Cliente;
use App\Entity\Operadora;

/**
 * @ORM\Entity(repositoryClass=TelefoneRepository::class)
 */
class Telefone
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ddd;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero;

    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="telefone")
    */

    private $cliente;

    /**
     * @ORM\OneToOne(targetEntity="Operadora", inversedBy="telefone")
     * 
    */

    private $operadora;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDdd(): ?int
    {
        return $this->ddd;
    }

    public function setDdd(int $ddd): self
    {
        $this->ddd = $ddd;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }
}
