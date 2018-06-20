<?php
//Testing Github
if(isset($_POST['submit'])){
    
 $clientname =   $_POST['clientname'];
 $clientweburl =    $_POST['clientweburl']; 
    $clientinfo =    $_POST['clientinfo']; 
    
    
    $connection = mysqli_connect('localhost', 'root', '', 'clients');
    
    if(!$connection){
         
        die("database connection failed");
    }
    $query = "INSERT INTO clients(clientname, clientweburl, clientinfo)";
    $query .= "VALUES ('$clientname', '$clientweburl', '$clientinfo')";
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die('query failed' . mysqli_error());
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add clients</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body> 
    <div class="container">
      <div class="col-sm-6">
           <form action="add_clients.php" method="post">
               <div class="form-group">
                  <label for="clientname">Client Name</label>
                   <input type="text" name="clientname" class="form-control">
               </div>
               
               <div class="form-group">
                  <label for="clientweburl">Client WEb/URl</label>
                   <input type="text" name="clientweburl" class="form-control">
               </div>
             <div class="form-group">
                  <label for="clientinfo">Client Information</label>
                   <input type="text" name="clientinfo" class="form-control">
               </div>
               
               
               <input class="btn btn-primary" type="submit" name="submit" value="Submit">
               

               
           </form>
       </div>
       </div>
    
</body>
</html>