<html>
<h1>PARTIE 1</h1>
<h2>Exercice 1</h2>

<?php  
//Je créé le contenu de mon tableau dans la variable $months
$months = array ("Janvier", "Février", "Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
?>

<h2>Exercice 2</h2>

<?php 
//J'affiche l'élément 5 de mon tableau, soit juin car janvier est la clé 0
echo $months[5];
?>

<h2>Exercice 3</h2>

<?php 
//J'affiche tout le contenu de mon tableau
foreach ($months as $elements){
echo '<pre>';
echo $elements;
echo '</pre>';   
};
?>


<h2>Exercice 4</h2>

<?php 
//Je crée un tableau associatif
$departments = array (
  
    '02'=>'Aisne',
    '59'=>'Nord',
    '60'=>'Oise',
    '62'=>'Pas-de-Calais',
    '80'=>'Somme');
?>

<h2>Exercice 5</h2>

<ul>
<?php 
//J'indique ici que le contenu de mon tableau sont des éléments, puis d'afficher chaque élément
foreach($departments as $elements) {
    echo '<li>' . $elements . '</li>';
};
?>
</ul>

<h2>Exercice 6</h2>
<ul>
<?php 
//Je lui demande d'indiquer la key de chaque élément de la variable $departments dans une phrase
foreach ($departments as $key =>$value)
{
echo '<li>';
echo 'Le département ' .$value. ' a le numéro '.$key.' ';
echo '</li>';
}
?>
</ul>
</html>