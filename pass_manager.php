<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
    <title>password managaer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
</head>
<body>
   <form action= "add_clients.php">
   
        <input class="btn btn-secondary" type="submit" name="submit" value="Client Add"><br>
       
        </form>
        <form action= "view_clients.php">
       <input class="btn btn-primary" type="submit" name="submit" value="Client View"><br>
        </form>
           <form action= "pass_manager.php" >
           <input class="btn btn-secondary" type="submit" name="submit" value="Add Record"><br>
        </form>
           <form action= "pass_manager.php">
           <input class="btn btn-primary" type="submit" name="submit" value="View Record"><br>
        </form>
        
       
    
</body>
</html>