<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <title>WebTruong</title>
    <!-- Meta tag Keywords -->
    <style>
        th {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    session_start();
	include'models/dbconfig.php';
    // if(isset($_SESSION['expire']))
    // {
    //     $now = time(); 
    //     if ($now > $_SESSION['expire']) {
    //         unset($_SESSION['id']);
    //         unset($_SESSION['name']);
           
    //     }
    // }
    $db = new database;
    $db->connect();
    if(isset($_GET['controller'])){
        $controller= $_GET['controller'];
    }
	if(empty($controller)) $controller= "login";
	$controller_name= $controller."_controller";
	require_once("./controllers/{$controller_name}.php");
	$controllerObj = new $controller_name();
	$controllerObj->run();
    ?>

    
</body>
</html>