<?php 
include('connexion.php');
if(isset($_POST['btn'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $password=$_POST['password'];

    $username=$_POST['username'];
    $email=$_POST['email'];
    $sql="INSERT INTO tbl_admin (first_name,last_name,email,password,username) 
    VALUES ('$first_name','$last_name','$email','$password','$username')";
    
    $select = mysqli_query($conn,$sql);

    if($select){
        header('location: index.php');
    }
    else{
       header('inscrit.php?error=1');
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
    <link rel="stylesheet" type="text/css" media="screen" 
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" 
        href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" 
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class=""> 
    <div class="boxx">



    <nav class="navbar navbar-dark bg-dark">
    <h3 style="color:white;">Formulaire </h3>
</nav>
        <form action="" method="post">
            <div class="group">
                <input class="inputMaterial" type="text" name="first_name" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label> first_name </label>
            </div>
            <div class="group">
                <input class="inputMaterial" type="text" name="last_name" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label> last_name </label>
            </div>
            <div class="group">
                <input class="inputMaterial" type="text" name="email" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label> email </label>
            </div>
            <div class="group">
                <input class="inputMaterial" type="password" name="password" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label> Mot de passe </label>
                </div>
                <div class="group">
                <input class="inputMaterial" type="text" name="username" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label> username</label>
                </div>
                <br><br>
                <button name="btn" type="submit" class="btn btn-outline-info"  style="font-size:20px; margin-left:26%;">Creez vos Compte</button>
           
         </form>
         <br>
         <?php include('footer.php'); ?>
    </div>

</div>

    
</body>
</html>