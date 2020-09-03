<?php

session_start();

include_once("keys.php");


$user = isset($_POST['user']) ? $_POST['user'] : '';//Name
$clave = isset($_POST['clave']) ? $_POST['clave'] : '';


$consulta = "SELECT User_Name, Pass_Usser, User_Type FROM Usuarios WHERE User_Name ='{$user}'";
$resultado = $mysqli->query($consulta);
if($consulta->errno) die($consulta->error);
//Guardamos el registro en la variable $fila
$fila = $resultado->fetch_assoc();
//El resultado de la consulta estarán en nombre y apellido, entonces:
$resulNombre = $fila['User_Name'];
$hash = $fila['Pass_Usser'];
$hash1 = $fila['User_Type'];
$registros = $resultado->num_rows;



$resultado->free();

$mysqli->close();

if (password_verify($clave, $hash) and $registros > 0 and $hash1=='Administrador'){


    header("Location: ../web/indexadmin.php");
    //echo 'Password is valid!', $hash1 ;
    exit();
}

elseif(password_verify($clave, $hash) and $registros > 0 and $hash1=='Vendedor'){



    header("Location: ../web/indexvendedor.php");
    //echo 'Password is valid!', $hash1 ;
    exit();
}

else {
    echo '<script language="javascript">alert("INICIO DE SESIÓN INCORECTO, POR FAVOR REVISA TUS DATOS");window.location.href="index.html"</script>';

    header("Location: ../index.html");
    //echo 'Tus datos no son correctos';
}

?>
