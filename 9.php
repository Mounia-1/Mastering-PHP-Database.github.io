<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
			
			<a href="9.php?SiteWeb=wwww.php.com" title="PHP"> Cliquer ici</a>
			
	
	<?php 

	
	/* Étape 1 - Créez un lien indiquant Cliquez ici et définissez 
	   le lien href pour passer certains paramètres et utiliser le super global GET pour le voir
*/
       

            echo $_GET['SiteWeb'];
	
   echo "<br>";
   echo "<br>";
   echo "<br>";

	//Étape 2 - Définissez un cookie qui expire dans une semaine


	$name="cookie1";
	$value="Semaine";
	$exp=time()+(60*60*24*7);

	setcookie($name,$value,$exp);
	echo print_r( $_COOKIE);

	echo "<br>";
	echo "<br>";
	echo "<br>";

	//Étape 3 - Démarrez une session et définissez-la sur la valeur, quelle que soit la valeur souhaitée. 
	
	session_start();
	$_SESSION['username'] = 'Mounia';
	echo '<a href="11.php">Room Number 11</a>';

	?>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>