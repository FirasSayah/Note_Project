
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuill</title>
    <link href="style.css" rel="stylesheet">



    <link rel="stylesheet" type="text/css" media="screen" 
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" 
        href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" 
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    
 <?php include('menu.php'); ?>


<?php include('body.php');?>

<div class="col-sm-8 col-sm-offset-3 col-lg-offset-2 main"> 
    <div class="signup-form-container " style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);    background-color:#f0edeb;
     max-width: 800px; margin-top:10%;margin-right:20%;
     border-radius: 3px; border-top:3px solid #7efff5">
        <!-- form start for data --> 
        <form action="" method="post">
            <div class="form-header">
                <h3 class="form-title"> Notes </h3>
                <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
            </div>

            <div class="form-body">
                <div class="row">
                    <div class="col-6">
                    <div class='input-group date' id='datetimepicker'>
                                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        <input type="text" name="date" style="width:200px; border-radius:5px;!important"> 
                    </div>
                </div>
                <div class="col-6">
                <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-book"></span></div>
                         <select class="form-control"  name="module">
                          <option selected >Modules</option>

                                     
                              </select>

                </div>
                

            </div>
            




      

    </div>
    <br><br><br>
    <div class="form-group" >
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <textarea name="rappel"  class="form-control" rows="2" placeholder="Rappel"></textarea>
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
              <div class="form-group" >
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <textarea name="rappel"  class="form-control" rows="2" placeholder="Ideé General"></textarea>
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
              <div class="form-group" >
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <textarea name="rappel"  class="form-control" rows="2" placeholder="Resumee"></textarea>
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
              <div class="form-footer">
                 <button type="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-log-in"></span> Enregistrer
                 </button>
            </div>
    </form>


</div>
</div>
</div>

<?php include('footer.php'); ?>
  











    
</body>
</html>