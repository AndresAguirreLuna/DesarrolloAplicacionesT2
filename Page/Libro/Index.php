<?php
    require_once("../templates/header.php");
?>
<body>

    <form action="procesar.php" method="POST">
    <label for="message-text" id="result" name="result" class="col-form-label"> <?php echo isset($_GET['result']) ? htmlspecialchars($_GET['result']) : ''; ?></label>
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="agregarLibroLabel">Admin Libro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Codigo:</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo isset($_GET['Codigo']) ? htmlspecialchars($_GET['Codigo']) : ''; ?>">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Titulo:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo isset($_GET['Titulo']) ? htmlspecialchars($_GET['Titulo']) : ''; ?>"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo isset($_GET['isbn']) ? htmlspecialchars($_GET['isbn']) : ''; ?>"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Editorial:</label>
            <input type="text" class="form-control" id="editorial" name="editorial" value="<?php echo isset($_GET['Editorial']) ? htmlspecialchars($_GET['Editorial']) : ''; ?>"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Paginas:</label>
            <input type="text" class="form-control" id="paginas" name="paginas" value="<?php echo isset($_GET['Paginas']) ? htmlspecialchars($_GET['Paginas']) : ''; ?>"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Codigo Autor:</label>
            <input id="idAutor" name="idAutor" class="form-control" value="<?php echo isset($_GET['IdAutor']) ? htmlspecialchars($_GET['IdAutor']) : ''; ?>"></textarea>
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