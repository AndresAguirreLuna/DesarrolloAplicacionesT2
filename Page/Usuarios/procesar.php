<?php

include('../../conexion.php');
$miconexion = new ConexionMysql();
$miconexion->CrearConexion();
$Codigo=$_POST['Codigo'];
$Nombre=$_POST['Nombre'];
$Telefono=$_POST['Telefono'];
$Direccion=$_POST['Direccion'];

//Insertar
if(@$_POST['btnRegistrar']){
    $sql="insert into usuarios(Codigo, Nombre, Telefono, Direccion) values('".$Codigo."','".$Nombre."','".$Telefono."','".$Direccion."')";
    echo $sql;
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
    $sql="select Codigo, Nombre, Telefono, Direccion from usuarios where Codigo='".$Codigo."'";
    echo $sql;
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        while ($row=$miconexion->ObtenerFilas($result)){
            header ("location: index.php?Codigo=".$row[0]."&Nombre=".$row[1]."&Telefono=".$row[2]."&Direccion=".$row[3]);
        }
        
    }
    else{
        header ("location: index.php?result=Error, El usuario no existe");
    }
}

//Eliminar
if(@$_POST['btnEliminar']){
    $sql="delete from usuarios where Codigo='".$Codigo."'";
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
    $sql="update usuarios set Nombre='".$Nombre."', Telefono='".$Telefono."', Direccion='".$Direccion."' where Codigo='".$Codigo."'";
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