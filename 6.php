
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 
<form action='6.php' method = "POST">

<br>

UserName :  <input type = "text" name = "username" /> 

<br>
<br>

<input type = "submit" value = "submit" />

</form>


	<?php  

  
	// Étape 1: Créez un formulaire qui soumet une seule valeur à POST (super global)
 

$admins = array ("Mounia" , "Oumayma" , "Hiba");

$username = $_POST['username'];

if (in_array ($username, $admins)){
	
	echo "<br>";
	echo "<br>";

	echo "welcome ". $username;
	
}

else {

	echo "<br>";
	echo "<br>";

	echo " This username not exist";
}


?>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>