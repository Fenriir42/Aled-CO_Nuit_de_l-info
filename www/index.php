<?php  
// Database settings
$db="jdrt";
$dbhost="localhost";
$dbport=3306;
$dbuser="admin";
$dbpasswd="aled&co";
// connecter à la base de données
$con=mysqli_connect("localhost:3306", "root", "", "jdrt_vih");

// On créé la requête
$req = "SELECT * FROM jdrt_vih";

// execute la requête $req en utilisant la connection $con et renvoie dans $res
$res = $con->query($req);
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
            echo "<tr><td>".$data['id']."</td><td>".$data['name']."</td><td>".$data['password']."</td></tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
