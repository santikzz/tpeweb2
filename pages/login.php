<?php

require_once("includes/db.php");
require_once("includes/config.php");
require_once("pages/nav.php");

function show_login(){ 
  

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title><?php echo SITE_NAME; ?></title>
    <base href="<?php echo BASE_URL; ?>">
    <link rel="icon" type="image/png" href="images/icon.png">
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script type="text/javascript" src="scripts.js"></script>
</head>
<body class="body">

<?php show_nav(); ?>

<div class="content">

   
    
</div>


<footer>
</footer>

</body>

</html>

<?php } ?>