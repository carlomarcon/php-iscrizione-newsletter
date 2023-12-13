<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php 
session_start();
if(isset($_GET['email'])) 
{$_SESSION['value'] = $_GET['email'];} else{ $_SESSION['value']= 'Scrivere email qui';}


?>


  <div class="wrapper d-flex w-100 justify-content-center align-items-center">
  <div class="container w-25">
   <form action="index.php" method="GET">
    <label for="email">
        <input name="email" type="text" placeholder=
       " <?php 
         include_once __DIR__.'/functions.php';
        if(isset($_GET['email'])) {
          if (check($_GET['email'])==true) {echo "'Email corretta'"; 
          } elseif(check($_GET['email'])==false) {echo $_SESSION['value'];} }else{echo $_SESSION['value']; }?>
        "
        
         class=
        "<?php 

        
        if(isset($_GET['email'])) {if(check($_GET['email'])==true){echo "success"; header('Location: ./thanks.php'); } else {echo "failure";}} else{echo 'normal';} 
        ?>" >
    </label>
    <button class="submit">Invia </button>
   </form>

   </div>
   </div>
   


   


   
</body>
</html>