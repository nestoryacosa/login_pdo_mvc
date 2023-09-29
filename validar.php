<?php  
include 'controlador/UsuarioControlador.php';
// echo UsuarioControlador::login("juanito","1234");

if(isset($_POST['nickname']) && isset($_POST['pwd'])){
    $nick = $_POST['nickname'];
    $pwd = $_POST['pwd'];

    if(UsuarioControlador::login($nick,$pwd)) {
        header("location:usuario.php");
    }else{
        ?>
        <?php 
        include("login.php");
        ?>       
            <script>alert("UPS!!, usuario o contraseña no válida");</script>       
        <?php
    }
   
   
} ?>