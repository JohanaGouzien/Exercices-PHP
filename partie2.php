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


</html>
