<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<?php session_start();



?>
<body class="green">
    <div class="wrapper flex-column d-flex justify-content-center align-items-center">
        <h1>GRAZIE MILLE !</h1>
        <form  action="thanks.php" method="GET">
   <input class="goBack" type="submit" name='goBack' value="Tornare indietro" > 
   </form>
    </div>


   <?php if (isset($_GET['goBack'])){ header ('Location: ./index.php');} ?>
</body>
</html>