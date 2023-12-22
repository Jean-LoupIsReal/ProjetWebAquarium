<?php
include_once("inc/pretraitement.php");
include_once("inc/header.php");

if(isset($_REQUEST["action"]) && $_REQUEST["action"] == "paid")
{
    echo '<script type="text/javascript">
     viderPanier();
     </script>';
}


?>