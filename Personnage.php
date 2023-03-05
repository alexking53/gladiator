<?php
//Déclaration d'un namespace
namespace POO;

class Personnage{
    private $id;
    private $pseudo;
    private $vie=20;
    private $attaque=10;
    private $etat=true;
    private $photo;
    private static $num;

    public function __construct($lePseudo, $laVie, $lAttaque, $laPhoto){
        ++self::$num;
        $this->id = self::$num;
        $this-> pseudo=$lePseudo;
        $this-> vie=$laVie;
        $this-> attaque=$lAttaque;
        $this-> photo=$laPhoto;
    }

    public function getId(){
        return $this->id;
    }
    public function getPseudo(){
        return $this->pseudo;
    }
    public function getVie(){
        return $this->vie;
    }
    public function getAttaque(){
        return $this->attaque;
    }
    public function getEtat(){
        return $this->etat;
    }
    public function getPhoto(){
        return $this->photo;
    }

    public function setPseudo($lePseudo){
        $this-> pseudo=$lePseudo;
    }
    public function setVie($laVie){
        $this-> vie=$laVie;
    }
    public function setAttaque($lAttaque){
        $this-> attaque=$lAttaque;
    }
    public function setPhoto($laPhoto){
        $this-> photo =$laPhoto;
    }

    //les méthodes
    public function crier($parole){
        return $parole.' !';
    }
    public function gagnerPuissance($valeurVie, $valeurAttaque){
        $this->vie +=$valeurVie;
        $this->attaque +=$valeurAttaque;
    }
    public function attaquer($unPersonnage){
        if($unPersonnage->laVie>0){
            $n= rand(1, $this->lAttaque);
            $unPersonnage->laVie -= $n;
            return $n; 
        }
        
    }

    public static function duel($perso1, $perso2){
        $output = "";
        while(($perso1->laVie>0)and($perso2->laVie>0)){
            $output .= $perso1->pseudo." attaque ".$perso2->pseudo." ".$perso1->attaquer($perso2)." dégats \n";
            $output .= $perso2->pseudo." attaque ".$perso1->pseudo." ".$perso2->attaquer($perso1)." dégats \n";
        }
        echo '<textarea rows="10" cols="50">' . $output . '</textarea> <br/>';
    }
 

}

?>