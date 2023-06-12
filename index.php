<?php
include('nav.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!--//////////////////   Question 1   ///////////////////////-->
<?php
include ('ex1.php');
?>
<br>
<!--//////////////////   Question 2   ///////////////////////-->
<?php
include ('ex2.php');
?>
<br>
<!--//////////////////   Question 3   ///////////////////////-->
<?php
include ('ex3.php');
?>
<br>
<!--//////////////////   Question 4   ///////////////////////-->
<?php
include ('ex4.php');
?>
<br>
<!--//////////////////   Question 5   ///////////////////////-->
<?php
include ('ex5.php');
?>
<br>
<!--//////////////////   Question 6   ///////////////////////-->
<?php
include ('ex6.php');
?>
<br>
<!--//////////////////   Question 7   ///////////////////////-->
<?php
include ('ex7.php');
?>
<br>
<!--//////////////////   Question 8   ///////////////////////-->
<?php
include ('ex8.php');
?>
<br>
<!--//////////////////   Question 9   ///////////////////////-->
<?php
include ('ex9.php');
?>
<br>
<!--//////////////////   Question 10 ///////////////////////-->
<?php
include ('ex10.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
<script>
    // Repli la barre de navigation lorsqu'un lien est cliqué
    $('.navbar-nav>li>a').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });
</script>

</body>
</html>
