<?php
    require_once("../templates/header.php");
?>
<body>

    <form action="procesar.php" method="POST">
    <label for="message-text" id="result" name="result" class="col-form-label"> <?php echo isset($_GET['result']) ? htmlspecialchars($_GET['result']) : ''; ?></label>

        <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title" id="agregarUsuarios">Admin Usuarios</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Codigo:</label>
            <input type="text" class="form-control" id="Codigo" name="Codigo" value="<?php echo isset($_GET['Codigo']) ? htmlspecialchars($_GET['Codigo']) : ''; ?>">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo isset($_GET['Nombre']) ? htmlspecialchars($_GET['Nombre']) : ''; ?>"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Telefono:</label>
            <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo isset($_GET['Telefono']) ? htmlspecialchars($_GET['Telefono']) : ''; ?>"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Direccion:</label>
            <input type="text" class="form-control" id="Direccion" name="Direccion" value="<?php echo isset($_GET['Direccion']) ? htmlspecialchars($_GET['Direccion']) : ''; ?>"></textarea>
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