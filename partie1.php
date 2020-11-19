
<!--Déclarer les variables avant la balise HTML-->
<!-- Partie 1-->
<html>
<h1>PARTIE 1</h1>
<h2>Exercice 1</h2>
<?php
 

//On déclare les variables ( var object = "Hello";)
$object="Hello";
$message= "World";

echo $object;
echo $message;
?>

<!--Correction exercice 1-->
<h1><?php echo $object ?></h1>
<p><?php echo $message ?></p>

<h2>Exercice 2</h2>

<?php


$lastName="Doe. ";
$firstName="John ";
$age="34 ";


echo "Mon nom est ";
echo $firstName;
echo $lastName;
echo "J'ai ";
echo $age;
echo "ans.";
?>

<h2>Exercice 3 </h2>
<?php

$km= 1;
$km +=2;// affecte la valeur 3 à la variable $km correspond à l'instruction '$km = $km + 2';
$km +=122;
echo $km;
?>

<h2>Exercice 4</h2>
<?php

$name="Johana ";
echo "Bonjour ";
echo $name;
echo ", comment vas-tu?";
?>

<h2>Exercice 5</h2>
<?php

$answer="yes";

if ($answer){
    echo "Votre réponse est oui.";
}
else {
    echo "Votre réponse est non.";
}
?>

<h2>Exercice 6 </h2>

<?php

$number = ((($a =140) + 30) /2);
echo "Le résultat est ";
echo $number;
?> 
<!-- VOIR CORRECTION PARTIE 1 -->

</html>