<?php
require_once "config/session.php";
require_once "config/Connection.php";
require_once "controllers/menuController.php";

$menuController = new menuController();

$menuController->validateMenu();




if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_SESSION,$_SESSION['documento']) and $_SESSION['auth']=='OK')
{
    
    if(isset($_GET['route']))
    {
        $route=$_GET['route'];
    }
    else
    {
        $route=''; 
    }
    
    $FrontController=new FrontController($route);
}
else if(isset($_POST['email'],$_POST['clave']))
{
    
    require_once "controllers/loginController.php";
    $loginController=new loginController();
    $loginController->validateFormSession($_POST);   
}
else
{
    
    require_once "controllers/loginController.php";
    $loginController=new loginController();
    $loginController->validateUrl(); 
}
}
?>