<?php

include('../../conexion.php');
$miconexion = new ConexionMysql();
$miconexion->CrearConexion();
$Codigo=$_POST['codigo'];
$Localizacion=$_POST['Localizacion'];
$IdLibro=$_POST['IdLibro'];

//Insertar
if(@$_POST['btnRegistrar']){
    $sql="insert into ejemplares(Codigo, Localizacion, IdLibro) values('".$Codigo."','".$Localizacion."','".$IdLibro."')";
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
    $sql="select Codigo,Localizacion, IdLibro from Ejemplares where Codigo='".$Codigo."'";
    echo $sql;
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        while ($row=$miconexion->ObtenerFilas($result)){
            header ("location: index.php?Codigo=".$row[0]."&Localizacion=".$row[1]."&IdLibro=".$row[2]);
        }
        
    }
    else{
        header ("location: index.php?result=Error, El ejemplar no existe");
    }
}


//Eliminar///
if(@$_POST['btnEliminar']){
    $sql="delete from ejemplares where Codigo='".$Codigo."'";
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
    $sql="update ejemplares set Localizacion='".$Localizacion."', IdLibro='".$IdLibro."' where Codigo='".$Codigo."'";
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