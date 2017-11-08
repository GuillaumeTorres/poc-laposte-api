<?php
/**
 * Contract entity file
 *
 * PHP Version 5.6
 *
 * @category Entity
 *
 * @package  AppBundle\Entity
 *
 * @author   Guillaume <guillaume.torres@soprasteria.com>
 */
namespace AppBundle\Entity;

/**
 * Contract class
 *
 * @category Entity
 */
class Contract
{
    private $EstDecede;

    private $FoyerEstComplet;

    private $AutorisationDiffusionCNIL;

    /**
     * @return Boolean
     */
    public function getEstDecede()
    {
        return $this->EstDecede;
    }

    /**
     * @param Boolean $EstDecede
     */
    public function setEstDecede($EstDecede)
    {
        $this->EstDecede = $EstDecede;
    }

    /**
     * @return Boolean
     */
    public function getFoyerEstComplet()
    {
        return $this->FoyerEstComplet;
    }

    /**
     * @param Boolean $FoyerEstComplet
     */
    public function setFoyerEstComplet($FoyerEstComplet)
    {
        $this->FoyerEstComplet = $FoyerEstComplet;
    }

    /**
     * @return mixed
     */
    public function getAutorisationDiffusionCNIL()
    {
        return $this->AutorisationDiffusionCNIL;
    }

    /**
     * @param mixed $AutorisationDiffusionCNIL
     */
    public function setAutorisationDiffusionCNIL($AutorisationDiffusionCNIL)
    {
        $this->AutorisationDiffusionCNIL = $AutorisationDiffusionCNIL;
    }

    public function getUri()
    {
        return 'osef/ballec';
    }
}