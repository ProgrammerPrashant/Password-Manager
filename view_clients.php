<?php

$connection = mysqli_connect('localhost','root','','clients');
if(!$connection)
{
     die("database connection failed");
}

 $query = "SELECT * FROM clients";
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die('query failed' . mysqli_error());
    }
        




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View clients</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
        <div class="container">
      
       <div class="col-sm-6">
           
           <?php
           // this is how we fetch data from databse with function mysqli_fetch_row or mysqli_fetch_assoc
           // we call mysqli_fetch_assoc($result) bcoz in result variable up we have connectuin and query
           while($row = mysqli_fetch_assoc($result))
           {
               ?>
               <pre>
               <?php

               print_r($row);
            
               ?>
               </pre>
               <?php
           }
           
           
           
           
           ?>
           
       </div>
        
        
         </div>
</body>
</html>