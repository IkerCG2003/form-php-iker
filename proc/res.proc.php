<?php 
// echo $_POST['pokemon'];
if (strtolower($_POST['pokemon'])=='pikachu'){
    header('location: ../view/pantalla1.php');
}    else {
    header('location: ../index.php?msg=25');
}