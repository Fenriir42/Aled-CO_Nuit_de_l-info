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
            <meta charset="utf-8">
            <title>Custom Checkbox</title>
            <script src="../scripts/register.js"></script>
            <link rel="stylesheet" href="../style/register.css">
        </head>
        <body>
          <div class="container right-panel-active">
            <!-- Sign Up -->
            <div class="container__form container--signup">
              <form method="post" action="#" class="form" id="form1">
                <h2 class="form__title">Sign Up</h2>
                <input name="user" type="text" placeholder="User" class="input" />
                <input name="password" type="password" placeholder="Password" class="input" />
                <button type="sudmit" class="btn">Sign Up</button>
              </form>
            </div>
          
            <?php echo $_POST['user'];?>
            <!-- Sign In -->
            <div class="container__form container--signin">
              <form method="post" action="#" class="form" id="form2">
                <h2 class="form__title">Sign In</h2>
                <input type="password" placeholder="Password" class="input" />
                <a href="#" class="link">Forgot your password?</a>
                <button class="btn">Sign In</button>
              </form>
            </div>
          
            <!-- Overlay -->
            <div class="container__overlay">
              <div class="overlay">
                <div class="overlay__panel overlay--left">
                  <a href="login.html">
                  <button class="btn" id="signIn">Sign In</button>
                  </a>
                </div>
                <div class="overlay__panel overlay--right">
                  <button class="btn" id="signUp">Sign Up</button>
                </div>
              </div>
            </div>
          </div>
          <?php 
            echo '<p>Bonjour le monde</p>';
            echo "<table>";
            // crée un tableau comme en sql
            while ($data = mysqli_fetch_array($res)) {
                // on affiche les résultats
                echo "<tr><td>".$data['.$id.']."</td><td>".$data['.$User.']."</td><td>".$data['.$Password.']."</td></tr>";
            }
            echo "</table>";
          ?>
 </body>
 
 