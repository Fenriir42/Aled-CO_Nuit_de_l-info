<?php  
// Database settings
$db="sauveteur";
$dbhost="localhost";
$dbport=3306;
$dbuser="alan";
$dbpasswd="alan";
// connecter à la base de données
$con=mysqli_connect("localhost:3306", "root", "", "sauveteur");
// $con=mysqli_connect("localhost:3306", "alan", "alan", "sauveteur");
// $pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);

// On créé la requête
$req = "SELECT * FROM sauvetage";

// execute la requête $req en utilisant la connection $con et renvoie dans $res
$res = $con->query($req);
 
// on va scanner tous les tuples un par un


?>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
        echo '<p>Bonjour le monde</p>';
        echo "<table>";
        // crée un tableau comme en sql
        while ($data = mysqli_fetch_array($res)) {
            // on affiche les résultats
            echo "<tr><td>".$data['id']."</td><td>".$data['name']."</td><td>".$data['description']."</td></tr>";
        }
        echo "</table>";

        ?>
    </body>
</html>
