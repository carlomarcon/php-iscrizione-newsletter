<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="green">
    <div class="wrapper d-flex justify-content-center align-items-center">
        <h1>GRAZIE MILLE !</h1>
    </div>

    <form action="thanks.php" method="GET">
   <input type="submit" name='goBack'>
   </form>

   <?php if (isset($_GET['goBack'])){ header ('Location: ./index.php');} ?>
</body>
</html>