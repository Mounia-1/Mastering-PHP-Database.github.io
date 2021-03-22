<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

 
	//Étape 1: Définir une fonction et qui renvoie un calcul de 2 nombres

	function Numbers($a, $b) {
	$somme = $a + $b;
	return $somme;
}

    $somme = Numbers(5, 3);

    echo "La somme des 2 nombres est  " . $somme;

	echo "<br>";
	echo "<br>";

	//Étape 2: Créez une fonction qui transmet des paramètres et appelez-la à l'aide de valeurs de paramètres

	function bonjour ($nom, $prénom) {
		echo "Bonjour " . $nom . "  " . $prénom;
	}
 
bonjour ("AISSAOUI", "Mounia")
	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>