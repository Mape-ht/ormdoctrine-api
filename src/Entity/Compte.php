<?php
// api/src/Entity/Book.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * A book.
 *
 * @ORM\Entity
 */
class Compte
{
    /**
     * @var int The id of this compte.
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
    public $numero;

    /**
     * @var string 
     *
     * @ORM\Column(type="string")
     */
    public $nom;

    /**
     * @var string 
     *
     * @ORM\Column(type="string")
     */
    public $prenom;

    /**
     * @var string 
     *
     * @ORM\Column(type="string")
     */
    public $typecompte;

    
    /**
     * @var Operation[] 
     *
     * @ORM\OneToMany(targetEntity="Operation", mappedBy="compte", cascade={"persist", "remove"})
     */
    public $operations;
    
    public function __construct()
    {
        $this->operations = new ArrayCollection();
    }

    

    /**
     * Get the value of numero
     *
     * @return  string
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @param  string  $numero
     *
     * @return  self
     */ 
    public function setNumero(string $numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string  $nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     *
     * @return  string
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param  string  $prenom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of typecompte
     *
     * @return  string
     */ 
    public function getTypecompte()
    {
        return $this->typecompte;
    }

    /**
     * Set the value of typecompte
     *
     * @param  string  $typecompte
     *
     * @return  self
     */ 
    public function setTypecompte(string $typecompte)
    {
        $this->typecompte = $typecompte;

        return $this;
    }
}