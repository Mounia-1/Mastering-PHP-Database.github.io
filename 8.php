<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  
	Étape 1 - Créer une variable avec du texte comme valeur
	*/
	 $Name ='Mounia';
	/*
	Étape 2 - Utilisez la fonction crypt() pour le crypter
*/

     echo "Standard DESs: ".crypt($Name ,'st');


/*

	Étape 3 - Attribuez le résultat de cryptage à une variable
*/

     echo "<br>";
	 echo "<br>";


     $h=crypt($Name, 'st');
	 


/*
	Étape 4 - Échoyez de la variable 
	*/

	echo $h ;
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>