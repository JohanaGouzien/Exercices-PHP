<html>
<h1>Partie 2</h1>
<h2>Exercice 1</h2>

<?php

$age="12";

if ($age >= 18){
echo "Vous êtes majeur.";
}
else {
echo "Vous êtes mineur.";
}
?>

<h2>Exercice 2</h2>
<p>
<?php

$age=18;
$gender="Homme";

if ( ($gender=="Homme") && ($age >=18) ) {
   
   echo "Vous êtes un homme et vous êtes majeur";
}

else if ( ($gender=="Homme") && ($age < 18) ) {
   echo "Vous êtes un homme et vous êtes mineur";
}

else if ( ( $gender=="Femme") && ($age >=18) ) {
   echo "Vous êtes une femme et vous êtes majeur";
}

else {
   echo "Vous êtes une femme et vous êtes mineur";
}

// Comparaison LIGNE 24: Je dis ici que SI le $genre =="Homme" ET $age >= 18,le nav affichera le message ligne25
//&& = ET || = OU   
?>
</p>

<h2>Exercice 3</h2>
<p><?php 
//echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!'; 
//Donc on dit : Si le gender est différent de 'Homme', affiche C'est une dev. SINON(:) C'est un dev
//La ligne 48 peut se traduire par ligne 51 à 58
//Ecriture ternaire = 1 condition et deux valeurs

$gender = "Homme";

if ($gender != "Homme") {
   echo "C'est une développeuse !";
}
else {
   echo "C'est un développeur !";
}
?></p>

<h2>Exercice 4</h2>
<p>
<?php 
//echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur'; (Ecriture ternaire)
//On traduit par
  
$age=14;

if ($age >= 18){
echo "Tu es majeur.";
}
else {
echo "Tu n'es pas majeur.";
};

?>
</p>
</html>
