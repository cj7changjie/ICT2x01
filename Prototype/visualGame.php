<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include "classes/users.class.php";

session_start();
$Details = "";
if(!isset($_SESSION['sessionInfo'])){
    header("Location:loginPage.php");
}
else{
    $Details = $_SESSION['sessionInfo'];
    if($Details->getRole() != "student"){
        header("Location:loginPage.php");
    }
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/userGame.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <!-- For Navbar -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
        <link rel="stylesheet" type="text/css" href="css/moduleTable.css">       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
        <title></title>
    </head>
    <body id="gameBody">
        <?php
            include "navBar.php";
            //if($Details->getMod() == ""){
            //    echo "<h1>No Module Enrolled</h1>";
            //}
            //else{
                echo '<canvas id="interactiveCanvas" width="900px" height="230px"></canvas>';
            //}

            include "footer.php";
        ?>
        <!-- The Modal -->
        <div id="myModal" class="modal" style="width:600px; height: 600px; margin: auto;">
            <div class="modal-content">
                <div class="modal-header">
                  <span class="close">&times;</span>
                  <h2>Grades & Comments <span class="glyphicon glyphicon-user"></span> </h2>
                </div>
                <div class="modal-body">
                  Test
                </div>
                <div class="modal-footer">
                  <h3>Modal Footer</h3>
                </div>
            </div>
    </body>
    <script src="js/visualGame.js" type="text/javascript"></script>
</html>
