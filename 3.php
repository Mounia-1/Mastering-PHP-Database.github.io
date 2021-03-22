<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  




//Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"
$valeur1 ="I love";
$valeur2 = "greenchip";

if ( $valeur1 == "hello") {
	echo "Have a good day!";
	  }
	  elseif ($valeur2 == "I love"){
		echo "Have a good day!";}
		else {
			echo "I love greenchip :p";}

			$x = 1;

			echo "<br>";
			echo "<br>";

//Étape 2: Créez un forloop qui affiche 10 nombres

$x = 1;

while($x <= 10) {
  echo  $x++;
}


echo "<br>";
echo "<br>";
//Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas
$x="Personne";
switch ($x) {
    case "AISSAOUI":
        echo "c'est le nom de la " . $x ;
        break;
    case "Mounia":
        echo "c'est le prénom de la" . $x ;
        break;
    case "33":
        echo "c'est l'âge de la" . $x ;
        break;
	case "1m65":
	    echo "c'est la taille de la" . $x;
	    break;
	case "Informatique":
	    echo "c'est le domaine de travail de la" . $x;
	    break;

		default:
		echo "Personne";
	}

 
?>
	



</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>