<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		
		//Étape 1: Créez 2 variables appelées number1 et number2 et affecté au number1 la valeur 10 et le deuxième la valeur 20
		
		$number1 = 10;
        $number2 = 20;

		echo $number1;
		echo "<br>";

		echo $number2;

		echo "<br>";
		echo "<br>";
		
		//Étape 2: Ajoutez les deux variables et affichez la somme avec écho:

        echo "La somme des deux variables est " . $number1 + $number2;


		//Étape 3: Créez 2 tableaux avec les mêmes valeurs, l'un régulier et l'autre associatif

        echo "<br>";
		echo "<br>";

         $Régulier = array("10","20");
         echo "Tableau régulier " . $Régulier[0]." , " . $Régulier[1];

		 echo"<br>";
		 echo "<br>";

		 $Associatif = array("valeur1"=>"15", "valeur2"=>"25");
		 echo "Tableau Associatif " . $Associatif['valeur1'] . " , " . $Associatif['valeur2'];

		 echo "<br>";
		 echo "<br>";


		//Étape 4: Créez une constante et définissez-la sur la valeur de PHP. et utilisez un écho pour l'afficher

        define("Salutation", "Bonjour tous le monde");
        echo Salutation;
			
	
		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>