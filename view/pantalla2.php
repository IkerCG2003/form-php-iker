<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos</title>
</head>
<body>
<?php
    session_start();
    if (!($_SESSION["pantalla2"]=='check')) {
        header("location: ../index.php");
    }
    ?>
    <h1>salir</h1>
    <a href="../proc/res.proc.php">click aquí</a>
</body>
</html>