<?php
class immobiblier
{
    private $ref;
    private $propriétaire;
    private $localité;
    private $surface;
    private $nbPieces;
    private $domaineUsage;
    private $nature;
    private $nbEtage;
    private $Surf_com;
    function __construct($ref, $propriétaire, $localité, $surf, $nbPieces, $domaineUsage,$nature,$nbEtage,$surf_com)
    {
        $this->ref = $ref;
        $this->propriétaire = $propriétaire;
        $this->localité = $localité;
        $this->surface = $surf;
        $this->nbPieces = $nbPieces;
        $this->domaineUsage = $domaineUsage;
        $this->nature=$nature;
        $this->nbEtage=$nbEtage;
        $this->Surf_com=$surf_com;
    }



    public function getRef()
    {
        return $this->ref;
    }


    public function setRef($ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getPropriétaire()
    {
        return $this->propriétaire;
    }


    public function getLocalité()
    {
        return $this->localité;
    }


    public function setLocalité($localité): self
    {
        $this->localité = $localité;

        return $this;
    }

    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    public function setNbPieces($nbPieces): self
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    public function getDomaineUsage()
    {
        return $this->domaineUsage;
    }


    public function setDomaineUsage($domaineUsage): self
    {
        $this->domaineUsage = $domaineUsage;

        return $this;
    }


    public function getSurface()
    {
        return $this->surface;
    }

    public function setSurface($surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get the value of nature
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set the value of nature
     */
    public function setNature($nature): self
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get the value of nbEtage
     */
    public function getNbEtage()
    {
        return $this->nbEtage;
    }

    /**
     * Set the value of nbEtage
     */
    public function setNbEtage($nbEtage): self
    {
        $this->nbEtage = $nbEtage;

        return $this;
    }

    /**
     * Get the value of Surf_com
     */
    public function getSurfCom()
    {
        return $this->Surf_com;
    }

    /**
     * Set the value of Surf_com
     */
    public function setSurfCom($Surf_com): self
    {
        $this->Surf_com = $Surf_com;

        return $this;
    }
}
