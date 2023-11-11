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
            header ("location: index.php?result=Registro insertado en la base de datos.");
        }
        else{
            header ("location: index.php?result=Error al registrar. no se guardo en la base de datos.");
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
        header ("location: index.php?result=Error, Autor no existe");
    }
}


//Eliminar///
if(@$_POST['btnEliminar']){
    $sql="delete from autor where Id='".$Codigo."'";
    $result =$miconexion->EjecutarSQL($sql);
    if($result){
        $numfila=$miconexion->ObtenerFilasAfectadas();
        if ($numfila>0){
        header ("location: index.php?result=Eliminado Exitosamente");
        }
        else{
        header ("location: index.php?result=Error, No se encontro que eliminar.");
        }
    }

}

//Actualizar
if (@$_POST['btnActualizar']){
    $sql="update autor set nombre='".$nombre."', apellido='".$apellido."' where Id='".$Codigo."'";
    echo $sql;
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        if($result>0){
            header ("location: index.php?result=Registro Actualizado");
        }
    }else{
        header ("location: index.php?result=Error al actulizar, no se encontro registro.");
    }
        
    }
    
