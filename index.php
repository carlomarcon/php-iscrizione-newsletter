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
        <input name="email" type="email" >
    </label>
    <button class="submit">Invia</button>
   </form>


   <?php if(isset($_GET['email'])) {
    echo $_GET['email'];
   } ?>
</body>
</html>