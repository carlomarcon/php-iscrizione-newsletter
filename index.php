<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method="GET">
    <label for="email">
        <input name="email" type="text" class=
        "<?php 
          include_once __DIR__.'/functions.php';
        
        if(isset($_GET['email'])) {if(check($_GET['email'])==true){echo "success"; } else {echo "failure";}} 
        ?>" >
    </label>
    <button class="submit">Invia </button>
   </form>
   

   <!-- <?php
   include_once __DIR__.'/functions.php';
   
//    if(isset($_GET['email'])) {
//     echo 'ok';
//    } 

   ?> -->

   
</body>
</html>