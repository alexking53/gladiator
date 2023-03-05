<?php
//On appelle la classe
require_once 'Personnage.php';

//On utilise le namespace
use POO\Personnage ;

/*$unPersonnage = new Personnage() ;
var_dump($unPersonnage);
$unPersonnage-> vie=250;
var_dump($unPersonnage);

$unPersonnage = new Personnage('Shrek', 250, 20, 'image/shrek.png');
var_dump($unPersonnage);*/

$shrek = new Personnage('Shrek', 250, 20, 'image/shrek.png');
$shrek-> lePseudo='Shrek';
$shrek-> laVie=250;
$shrek-> lAttaque=20;
$shrek-> laPhoto='image/shrek.png';

$scare = new Personnage('Bloody Mary', 3000, 2, 'image/scare.jpg');
$scare-> lePseudo='Bloody Mary';
$scare-> laVie=3000;
$scare-> lAttaque=2;
$scare-> laPhoto='image/scare.jpg';

$naruto = new Personnage('Naruto', 300, 40, 'image/naruto.jpg');
$lempereur = new Personnage('L\'Empereur', 150, 10, 'image/l_empereur.jpg');
$elon = new Personnage('Elon Musk', 100, 20, 'image/elon_msk.jpg');
$elgato = new Personnage('El Gato', 325, 17, 'image/El_Gato.png');
$derp = new Personnage('Derp', 20, 1, 'image/derp.png');
$sasuke = new Personnage('Sasuke', 300, 40, 'image/sasuke.jpg');

echo "<table>
    <td><img src='".$shrek->laPhoto."'> <br/>". $shrek->lePseudo."<br/></td>
    <td><img src='".$scare->laPhoto."'> <br/>". $scare->lePseudo."<br/></td>
</table>";

//var_dump($scare->laVie);

Personnage::duel($shrek, $scare);


if($shrek->laVie<=0){
    echo $scare->lePseudo." vainqueur ! <br/>".$scare->crier('HAHAHAHA')."<br/>";
}elseif($scare->laVie<=0){
    echo $shrek->lePseudo." vainqueur ! <br/>".$shrek-> crier('SOMEBODY ONCE TOLD ME THE WORLD IS GONNA ROLL ME')."<br/>";
}


//var_dump($shrek);
var_dump($sasuke);
echo $sasuke->crier('NARUTOOOOOO');
var_dump($naruto);
echo $naruto->crier('SASUKEEEEEE');


?>