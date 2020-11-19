<!--PARTIE 1 PHP, Déclarer toutes les variables avant la balise HTML-->

<!-- Exo 1 -->
<?php 
$object="Hello";
$message= "World";
?>

<!-- Exo 2 -->
<?php
$lastName="Doe ";
$firstName="John ";
$age= (int) 12; //Pas de guillemets = on est sûr que ce soit un chiffre
//Avec le int (integer)= permet de forcer le type de la variable = c'est un entier

?>

<!-- Exo 3 -->
<?php 
$km= 1;
//$km +=2;// affecte la valeur 3 à la variable $km correspond à l'instruction '$km = $km + 2';
//$km +=122;
?>

<!-- Exo 4 -->
<?php
$name="Johana ";
?>

<!-- Exo 5 -->
<?php

?>

<!-- Exo 6 -->
<?php 
$number = 140;
?>



<!-- J'ouvre ma page html -->
<html>
<!-- Exo 1 -->
<h1><?php echo $object ?></h1>
<p><?php echo $message ?></p>

<!--Exo 2-->

<ul>
    <li>Nom: <?php echo $lastName ?></li>
    <li>Prénom:<?php echo $firstName ?></li>
    <li>Âge:<?php echo $age ?></li>
</ul>

<p>Je m'appelle <?php echo $firstName?><?php echo $lastName?> et j'ai <?php echo $age ?> ans.</p>

<p><?php echo "Je m'appelle $firstName $lastName et j'ai $age ans.";?></p>
<!-- Ligne 46, ne pas faire pas comme ça-->

<p><?php echo 'Je m\'appelle $firstName $lastName et j\'ai $age ans.';?></p>
<!-- Ligne 49, la simple quote ne fonctionne pas -->

<p><?php echo 'Je m\'appelle '.$firstName.' '.$lastName.' et j\'ai '.$age.' ans.';?></p>
<!-- Donc on va concaténer Ligne 52 -->
<!-- On utlise un slash inversé avant l'apostrophe -->

<p><?php echo "Je m'appelle ".strtoupper($firstName)." ".$lastName." et j'ai ".$age." ans.";?></p>
<!-- Utiliser des doubles quotes permet de ne pas utiliser le slash inversé -->


<!--Exo 3-->
<p><?php echo "C'est à " .(($km + 2) + 122). " kilomètres d'ici." ?></p>

<p><?php 
$km=1;
echo $km;
?></p>

<p><?php
$km=3;
echo $km;
?></p>

<p><?php
$km=125;
echo $km;
?></p>

<!-- Exo 4 -->
<p><?php echo "Bonjour " .$name. ", comment vas tu ?" ?></p>
<p>Bonjour <?php  echo $name;?>comment vas tu aujourd'hui?</p>

<!-- Exo 5 -->

<p><?php
$answer= $_GET["Fred"];
if ($answer == "yes"){
    echo "Votre réponse est oui.";
}
else if ($answer == "non"){
    echo "Votre réponse est non.";
}
else {
    echo "Vous avez répondu autre chose";
}

print_r($_GET);


//Si je change pas variable $answer, le message indiquera le else
?></p>

<!-- Exo 6-->

<p><?php echo "Le résultat est de " .(($number + 30) /2)."." ?></p>
<!-- $number=(140 + 30)/2;
echo $number -->

</html>