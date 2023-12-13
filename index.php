<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method="GET">
    <label for="email">
        <input name="email" type="text" >
    </label>
    <button class="submit">Invia</button>
   </form>


   <?php
   include_once __DIR__.'/functions.php';
   
   if(isset($_GET['email'])) {
    echo check($_GET['email']);
   } 

   ?>

   
</body>
</html>