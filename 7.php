<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/* 
	Étape 1 - Créer une base de données dans PHPmyadmin

	Étape 2 - Créez un tableau comme celui de la conférence

	Étape 3 - Insérez des données

	Étape 4 - Connectez-vous à la base de données et lisez les données 
	
	*/

	$dsn = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname= 'mastering-databases';
	$con = mysqli_connect ($dsn, $user, $pass);

if ( mysqli_connect_errno())
{
	echo "Failed to connect";
	exit();
}
else {
	echo "connection success";
}

  /*  $dsn = 'localhost';
	$user = 'root';
	$pass = '';
	$dbName= 'mastering-databases';
	

	try {

	$con = new PDO("$dsn; dbname=$dbName", $user, $pass);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "you are connected";
  }
    catch (PDOException $e)

{
	echo 'failed' . $e->getMessage();
}
*/

/*$mysqli = new mysqli("localhost", "root", "", "mastering-databases");
    $mysqli -> set_charset("utf8");

    $requete = "SELECT * FROM employes";
    $resultat = $mysqli -> query($requete);

    while ($ligne = $resultat -> fetch_assoc()) {
        echo $ligne['id'] . ' ' . $ligne['Nom'] . ' ' . $ligne['Age'] . ' ';
        echo $ligne['Profession'] ;
		echo $ligne['Salaire'] ;
		echo $ligne['Département'] ;
    }
    $mysqli->close(); */




	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
