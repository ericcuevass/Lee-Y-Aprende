<?php
echo "estas en php";

//if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
//isset($_POST['ape_pa']) && !empty($_POST['ape_pa']) &&
//isset($_POST['ape_ma']) && !empty($_POST['ape_ma']) &&
//isset($_POST['email']) && !empty($_POST['email']) &&
//isset($_POST['contraseña']) && !empty($_POST['contraseña']))
//{
//    $destinatario = "the_soldier_war@hotmail.com";
//    $asunto = "Solicitud De Registro De Usuario";
//    $nombre = $_POST['nombre'];
//    $ape_pa = $_POST['ape_pa'];
//    $ape_ma = $_POST['ape_ma'];
//    $email = $_POST['email'];
//    $contraseña = $_POST['contra'];
//    $contraseña = $_POST['contra'];
//    
//    
//    mail($destinatario,$asunto,$nombre,$ape_pa,$ape_ma,$email,$contraseña,$contraseña);
//    echo "correo enviado";
//}else{
//    echo"correo no enviado";
//    
//    }
    $nombre = $_POST['nombre'];
    $ape_pa = $_POST['ape_pa'];
    $ape_ma = $_POST['ape_ma'];
    $email = $_POST['email'];
    $contraseña = $_POST['contra'];
 
echo "br/";
echo $nombre;
echo "br/";
echo $ape_pa;

?>