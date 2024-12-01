<?php
require_once "config.php";
require_once "immobilier.php";
class CRUDAppartement
{
    private $connexion;
    function __construct()
    {
        $cnx = new config();
        $this->connexion = $cnx->getConfig();
    }
    function AjouterApp(immobiblier $imm)
    {
        $prop = $imm->getPropriétaire();
        $loc = $imm->getLocalité();
        $surf = $imm->getSurface();
        $nbPieces = $imm->getNbPieces();
        $DU = $imm->getDomaineUsage();
        $nature = $imm->getNature(); // nb pieces
        echo $nature;
        echo "<br>";
        $NbEtage = $imm->getNbEtage();//
        echo $NbEtage;
        echo "<br>";
        $Surf_com = $imm->getSurfCom();
        echo $Surf_com;
        $sql = "INSERT INTO appartement VALUES (NULL,'$prop','$loc',$surf,$nbPieces,'$DU','$nature',$NbEtage,$Surf_com)";
        echo "$sql";
        $res = $this->connexion->exec($sql);
        return $res;
    }
    function RecupererApp($ref)
    {
        $sql = "select * from immobilier where réf=$ref";
        $res = $this->connexion->query($sql);
        $app = $res->fetch(PDO::FETCH_NUM);
        return $app;
    }
    function SupprimerApp($ref)
    {
        $sql = "delete from immobilier where réf=$ref";
        var_dump($sql);
        $res = $this->connexion->exec($sql);
        var_dump($res);
        return $res;
    }
    function ModifierApp(immobiblier $imm)
    {
        $ref = $imm->getRef();
        $prop = $imm->getPropriétaire();
        $loc = $imm->getLocalité();
        $surf = $imm->getSurface();
        $nbPieces = $imm->getNbPieces();
        $DU = $imm->getDomaineUsage();
        $nature = $imm->getNature();
        $NbEtage = $imm->getNbEtage();
        $Surf_com = $imm->getSurfCom();
        $sql = "update appartement 
        set réf=" . $ref . ",
            propriétaire='" . $prop . "',
            localité='" . $loc . "',
            surface=" . $surf . ",
            NbPieces=" . $nbPieces . ",
            domaineUsage='" . $DU . "',
            Nature='" . $nature . "',
            NbEtage=" . $NbEtage . ",
            Surface_Commune=" . $Surf_com . "
            where réf=" . $ref;
        echo $sql;
        $res = $this->connexion->exec($sql);
        return $res;
    }
    function listerApp()
    {
        $sql = "select * from immobilier";
        $res = $this->connexion->query($sql);
        $lesimm = $res->fetchAll(PDO::FETCH_NUM);
        return $lesimm;
    }
}
