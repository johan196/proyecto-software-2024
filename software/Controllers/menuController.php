<?php
require_once "Views/menuView.php";
class menuController
{
    
    function validateMenu()
    {
        $menuView=new menuView(); 
        $menuView->showMenu();
    }
}
?>