<?php

namespace Main\loginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doador
 */
class Doador
{
    /**
     * @var string
     */
    private $tiposangue;

    /**
     * @var string
     */
    private $rhsangue;

    /**
     * @var boolean
     */
    private $peso;

    /**
     * @var string
     */
    private $cidade;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $idfacebook;

    /**
     * @var string
     */
    private $linkfacebook;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set tiposangue
     *
     * @param string $tiposangue
     * @return Doador
     */
    public function setTiposangue($tiposangue)
    {
        $this->tiposangue = $tiposangue;

        return $this;
    }

    /**
     * Get tiposangue
     *
     * @return string 
     */
    public function getTiposangue()
    {
        return $this->tiposangue;
    }

    /**
     * Set rhsangue
     *
     * @param string $rhsangue
     * @return Doador
     */
    public function setRhsangue($rhsangue)
    {
        $this->rhsangue = $rhsangue;

        return $this;
    }

    /**
     * Get rhsangue
     *
     * @return string 
     */
    public function getRhsangue()
    {
        return $this->rhsangue;
    }

    /**
     * Set peso
     *
     * @param boolean $peso
     * @return Doador
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return boolean 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     * @return Doador
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Doador
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set idfacebook
     *
     * @param string $idfacebook
     * @return Doador
     */
    public function setIdfacebook($idfacebook)
    {
        $this->idfacebook = $idfacebook;

        return $this;
    }

    /**
     * Get idfacebook
     *
     * @return string 
     */
    public function getIdfacebook()
    {
        return $this->idfacebook;
    }

    /**
     * Set linkfacebook
     *
     * @param string $linkfacebook
     * @return Doador
     */
    public function setLinkfacebook($linkfacebook)
    {
        $this->linkfacebook = $linkfacebook;

        return $this;
    }

    /**
     * Get linkfacebook
     *
     * @return string 
     */
    public function getLinkfacebook()
    {
        return $this->linkfacebook;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
