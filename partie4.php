<html>
<h1>Partie 4</h1>

<h2>Exercice 1</h2>

<?php 
//Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.

function bonjour($name){

    return strtoupper($name);};
echo bonjour("Johana")
?>

<h2>Exercice 2 <h2>

<?php 
//Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines.
$lastName ="Gouzien";
$firstName="Johana";
function name($lastName,$firstName){

    return $lastName . $firstName;};

echo name($lastName,$firstName);
?>

<h2>Exercice 3</h2>
<?php 

function compareNumber($number1, $number2){

    if ($number1>$number2){
        return "Le premier nombre est plus grand.";
    }

    else if ($number1 < $number2){
        return "Le premier nombre est plus petit.";
    }

    else {
        return "Les deux nombres sont égaux.";
    }
}

echo compareNumber(9,9);
?>

<h2>Exercice 4</h2>

<?php 
//Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme : Bonjour + name + firstname + , tu as + age + ans.
function coordonnee($name, $firstname, $age){
    return "Bonjour " .$name." ".$firstname . ", tu as " .$age. " ans. </br>";
};

$nom = "Doe";
$prenom="John";
$age = 23;
echo coordonnee("Joh", "Gouz", "30");//exemple avec des valeurs
echo coordonnee($nom, $prenom,$age);//exeple avec des variables
?>

<h2>Exercice 5<h2>
<?php
//Afficher tous les nombres impairs entre 0 et 300, par ordre croissant.
//On va créer une boucle
//On dit que tant que $i n'est pas égale à 300, on continue d'ajouter avec i++
//On va donc boucler 300 fois
//On utilise for car ce sont des chiffres
for ($i=0; $i<=300; $i++) {
// On va tester la valeur de i - On dit de tester les chiffres impairs
    if ($i %2 == 1){
        echo "<li>".$i."</li>";
    };

};

?>

<h2>Exo 6</h2>

<?php

for ($i=1; $i<=100; $i++){
    if(($i % 3 ==0) && ($i % 5 ==0)){ echo "<li> FizzBuzz </li>";   }
    else if($i % 3 ==0)             { echo "<li> Fizz </li>";       }
    else if($i % 5 == 0)            { echo "<li> Buzz </li>";       }
    else                            { echo "<li>".$i."</li>";       }
    
}
//si la ligne 90 est divisible par 3 & 5
//si la ligne 91 est divisible par 3
//si la ligne 92 est divisible par 5
//sinon, affiche le chiffre

?>


</html>
