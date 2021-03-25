<?php

if (isset($_SESSION['nom'])) {


  header('Location: .php');
    session_unset();

    session_destroy();

    
}
else{
    
}
    exit();


?>