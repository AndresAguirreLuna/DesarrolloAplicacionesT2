<?php
    require_once("../templates/header.php");
?>
<body>

    <form action="procesar.php" method="POST">
        <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title" id="agregarAutor">Admin Autor</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Codigo:</label>
            <input type="text" class="form-control" id="codigo" name="Codigo" value="<?php echo isset($_GET['Codigo']) ? htmlspecialchars($_GET['Codigo']) : ''; ?>">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="Nombre" value="<?php echo isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : ''; ?>"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="Apellido" value="<?php echo isset($_GET['apellido']) ? htmlspecialchars($_GET['apellido']) : ''; ?>"></textarea>
          </div>
      </div>
    </div>
  </div>

        <br>
        <br>
        <input type="submit" name="btnRegistrar" value="Registrar" class="btn btn-success">
        <input type="submit" name="btnConsultar" value="Consultar" class="btn btn-primary">
        <input type="submit" name="btnActualizar" value="Actualizar" class="btn btn-info">
        <input type="submit" name="btnEliminar" value="Eliminar" class="btn btn-danger">
    </form>
</body>
</html>