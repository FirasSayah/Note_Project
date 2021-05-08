<?php 
 include('connexion.php'); 
 session_start();
 if(isset($_POST['btn'])){
    $username=$_POST['user'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM tbl_admin WHERE username='".$username."' AND password ='".$password."'";
    $select =mysqli_query($conn,$sql);
    if($select){
            header('location: acceuil.php');
            while( $row = mysqli_fetch_assoc($select)){
             $_SESSION['user'] = $row['first_name'];
            }
    }
    else {
        header('location:index.php?error=1');

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="login-panel panel panel-defaut">
    <div class="box">



        <div id="header">
            <h1 id="logintoregister">se connecter </h1>
        </div>
        <form action="" method="post">
            <div class="group">
                <input class="inputMaterial" type="text" name="user" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label> Utilisateur </label>
            </div>
            <div class="group">
                <input class="inputMaterial" type="password" name="password" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label> Mot de passe </label>
                </div>
            <button name="btn" id="buttonloginregister" type="submit">connexion </button>
           
         </form>
         <div id="footer-box"> <p class="footer-text">
             <span class="sign-up">Mot de passe oublier !</span> / <a href="inscrit.php">
                 <span class="sign-up"> s'inscriree </span></a></p>
                 
         </div>

    </div>

</div>

    
</body>
</html>