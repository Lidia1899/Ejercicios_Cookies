<?php 


if(isset($_REQUEST['entrar'])){ //Si le he pulsado
    if(isset($_REQUEST["guardar_clave"])){
 
    
    $nombre=htmlspecialchars($_REQUEST['usuario']); //Los datos recogidos se convierten en cadena, por lo que es inofensivo
    $clave=$_REQUEST['clave'];
    setcookie("Usuario", $nombre, time()+ 3600);
    setcookie("clave", $clave, time()+ 3600);
    print_r ($_COOKIE);
    echo $_COOKIE['usuario'], '<br>', $_COOKIE['clave']; 
    }
}
include 'head.php';
echo'<h1>Autenticar usuario y guardar en una cookie con PHP</h1><br><br>';
echo'<form action="prueba-cookies.php" method="post">
<table>
<tr>
<td>Usuario:</td>
<td><input type="text" name="usuario"></td>
</tr><tr>
<td>Clave:</td>
<td><input type="text" name="clave"></td>
</tr><tr>
<td colspan="2"><input type="checkbox" name="guardar_clave" value="1"> Memorizar el usuario en este ordenador</td>
</tr><tr>

<td><input type="submit" value="Entrar"></td>
</tr>
</table>
</form> ';
include 'pie.php';
?>