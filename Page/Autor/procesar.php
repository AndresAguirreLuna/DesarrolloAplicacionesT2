<?php

// require_once("../templates/header.php");

include('../../conexion.php');
$miconexion = new ConexionMysql();
$miconexion->CrearConexion();
$Codigo=$_POST['Codigo'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];

//Insertar
if(@$_POST['btnRegistrar']){
    $sql="insert into autor(Id,Nombre, Apellido) values('".$Codigo."','".$nombre."','".$apellido."')";
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        $numfila=$miconexion->ObtenerFilasAfectadas();
        if($numfila>0){
            echo "Registro insertado en la base de datos.";
        }
        else{
            echo "Error al registrar. no se guardo en la base de datos.";
        }
    }
}
//Consultar
if (@$_POST['btnConsultar']){
    $sql="select Id, Nombre, Apellido from autor where Id='".$Codigo."'";
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        while ($row=$miconexion->ObtenerFilas($result)){
            header ("location: index.php?Id=".$row[0]."&nombre=".$row[1]."&apellido=".$row[2]);
        }
        
    }
    else{
        echo "Error, Libro no existe.";
    }
}


//Eliminar///
if(@$_POST['btnEliminar']){
    $sql="delete from autor where Id='".$Codigo."'";
    $result =$miconexion->EjecutarSQL($sql);
    if($result){
        $numfila=$miconexion->ObtenerFilasAfectadas();
        if ($numfila>0){
            echo " Eliminado Exitosamente";
        }
        else{
            echo"<h2> Error No se encontro que eliminar.</h2>";
        }
    }

}

//Actualizar
if (@$_POST['btnActualizar']){
    $sql="update autor set nombre='".$nombre.", apellido='".$apellido." where Id='".$Codigo."'";
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        if($result>0){
            echo"Registro Actualizado";
        }
    }else{
        echo"Error al actulizar, no se encontro registro.";
    }
        
    }
    
