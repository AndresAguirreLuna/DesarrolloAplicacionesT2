<?php

include('../../conexion.php');
$miconexion = new ConexionMysql();
$miconexion->CrearConexion();
$Codigo=$_POST['codigo'];
$Titulo=$_POST['titulo'];
$isbn=$_POST['isbn'];
$Editorial=$_POST['editorial'];
$Paginas=$_POST['paginas'];
$IdAutor=$_POST['idAutor'];

//Insertar
if(@$_POST['btnRegistrar']){
    $sql="insert into libro(Codigo,Titulo, ISBN, Editorial, Paginas, IdAutor) values('".$Codigo."','".$Titulo."','".$isbn."','".$Editorial."','".$Paginas."','".$IdAutor."')";
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
    $sql="select Codigo,Titulo, ISBN, Editorial, Paginas, IdAutor from libro where codigo='".$Codigo."'";
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        while ($row=$miconexion->ObtenerFilas($result)){
            header ("location: index.php?Codigo=".$row[0]."&Titulo=".$row[1]."&isbn=".$row[2]."&Editorial=".$row[3]."&Paginas=".$row[4]."&IdAutor=".$row[5]);
        }
        
    }
    else{
        header ("location: index.php?result=Error, Libro no existe");
    }
}


//Eliminar///
if(@$_POST['btnEliminar']){
    $sql="delete from libro where Codigo='".$Codigo."'";
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
    $sql="update libro set Titulo='".$Titulo."', ISBN='".$isbn."', Editorial='".$Editorial."', Paginas='".$Paginas."', IdAutor='".$IdAutor."' where Codigo='".$Codigo."'";
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        if($result>0){
            header ("location: index.php?result=Registro Actualizado");
        }
    }else{
        header ("location: index.php?result=Error al actulizar, no se encontro registro.");
    }
        
    }
    
