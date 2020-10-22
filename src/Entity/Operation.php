<?php
// api/src/Entity/Review.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A review of a book.
 *
 * @ORM\Entity
 */
class Operation
{
    /**
     * @var int 
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string 
     *
     * @ORM\Column(type="string")
     */
    public $typeoperation;

    /**
     * @var int 
     *
     * @ORM\Column(type="integer")
     */
    public $montant;

    /**
     * @var string 
     *
     * @ORM\Column(type="string")
     */
    public $typefrais;

    /**
     * @var int 
     *
     * @ORM\Column(type="integer")
     */
    public $montantfrais;


    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    public $dateoperation;

    /**
     * @var int 
     *
     * @ORM\Column(type="integer")
     */
    public $solde;

    /**
     * @var Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte", inversedBy="operations")
     */
    public $compte;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of typeoperation
     *
     * @return  string
     */ 
    public function getTypeoperation()
    {
        return $this->typeoperation;
    }

    /**
     * Set the value of typeoperation
     *
     * @param  string  $typeoperation
     *
     * @return  self
     */ 
    public function setTypeoperation(string $typeoperation)
    {
        $this->typeoperation = $typeoperation;

        return $this;
    }

    /**
     * Get the value of montant
     *
     * @return  int
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @param  int  $montant
     *
     * @return  self
     */ 
    public function setMontant(int $montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get the value of typefrais
     *
     * @return  string
     */ 
    public function getTypefrais()
    {
        return $this->typefrais;
    }

    /**
     * Set the value of typefrais
     *
     * @param  string  $typefrais
     *
     * @return  self
     */ 
    public function setTypefrais(string $typefrais)
    {
        $this->typefrais = $typefrais;

        return $this;
    }

    /**
     * Get the value of montantfrais
     *
     * @return  int
     */ 
    public function getMontantfrais()
    {
        return $this->montantfrais;
    }

    /**
     * Set the value of montantfrais
     *
     * @param  int  $montantfrais
     *
     * @return  self
     */ 
    public function setMontantfrais(int $montantfrais)
    {
        $this->montantfrais = $montantfrais;

        return $this;
    }

    /**
     * Get the value of dateoperation
     *
     * @return  \DateTime
     */ 
    public function getDateoperation()
    {
        return $this->dateoperation;
    }

    /**
     * Set the value of dateoperation
     *
     * @param  \DateTime  $dateoperation
     *
     * @return  self
     */ 
    public function setDateoperation(\DateTime $dateoperation)
    {
        $this->dateoperation = $dateoperation;

        return $this;
    }

    /**
     * Get the value of solde
     *
     * @return  int
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @param  int  $solde
     *
     * @return  self
     */ 
    public function setSolde(int $solde)
    {
        $this->solde = $solde;

        return $this;
    }
}