<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


 
	//Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho

	$a = 85;
	
	echo cos ($a);

	echo "<br>";
	echo "<br>";

	//Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho

	$nom = "Mounia";
	echo gettype( $nom );


	echo "<br>";
	echo "<br>";

	//Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

	$Students =array("Mounia","Oumayma","Hiba");
	echo count ($Students); 

	
?>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>