<?php 
// Index a Pantalla1
if (isset($_POST['index']) && strtolower($_POST['pokemon'])=='pikachu'){
    // creo una sesiÃ³n por primera vez.
    session_start();
    $_SESSION['pantalla1']='check';
    header('location: ../view/pantalla1.php');
} else if (isset($_POST['index'])){
    header('location: ../index.php?msg=25');
    } 

// Pantalla1 a Pantalla2

else if (isset($_POST['pantalla1']) && strtolower($_POST['charmander'])=='charmander'){
    session_start();
    $_SESSION['pantalla2']='check';
    header('location: ../view/pantalla2.php');
} else if (isset($_POST['pantalla1'])){
    header('location: ../view/pantalla1.php?msg=4');
    } 