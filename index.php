<?php
    require "./Config/init.php";
    require "./includes/header.inc.php";
    require "./Controller/Controller.php";
    require "./Router/Router.php";

    $_router = new Router();


    $_route = $_GET;
    if(!isset($_route)) {
        $_route = "Not Set";
        echo "Sorry"; die();
    }
    

    $_router->getPage($_route);

    require "./includes/footer.inc.php";