<?php
define("WEBROOT", "http://localhost:8000");
?>


                 <?php
                //   require_once "../src/controllers/html/DemandeController.php";
                //   require_once "../src/controllers/Api/ApiController.php";
                    if(isset($_REQUEST["ressource"])){
                       $ressource=$_REQUEST["ressource"];
                       if(isset($_REQUEST["controller"])){
                        $controllerClass=ucfirst($_REQUEST["controller"])."Controller";
                        require_once "../src/controllers/$ressource/$controllerClass.php";
                        $controller= new  $controllerClass;
                    }
                      
                    }
                   
                 ?>
         