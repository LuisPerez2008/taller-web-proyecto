<?php require_once "vistas/parte_superior.php"?>
<?php require("conexion.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Control de <b>ARTÍCULOS</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addProducto" class="btn btn-success" data-toggle="modal"><img src="img/usuarioverde.png"><span>Agregar nuevo producto</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><img src="img/basuraroja.png"> <span>Borrar</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
						<th>Precio</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                <?php
                // Realiza una consulta para seleccionar todos los usuarios
                $sql = "SELECT id_producto,nombre_producto, descripcion, precio, imagen FROM producto";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Itera a través de cada fila de datos
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>"  . $row['id_producto'] . "</td>";
                        echo "<td>" . $row['nombre_producto'] . "</td>";
                        echo "<td>" . $row['descripcion'] . "</td>";
                        echo "<td>" . $row['precio'] . "</td>";
                        echo "<td><img style='max-width: 100px; max-height: 100px;' src='data:image/jpeg;base64," . base64_encode($row['imagen']) . "' alt='10px'></td>";
                        echo "<td>";
                        //<!-- Botón de editar -->
                        echo "<a href='#editEmployeeModal' class='edit' data-toggle='modal' data-id='" . $row['id_producto'] . "' data-nombre='" . $row['nombre_producto'] . "' data-email='" . $row['descripcion'] . "' data-celular='" . $row['precio'] . "' data-contrasena='" . $row['precio'] . "'><img src='img/editar.png'></a>";
                        //<!-- Botón de eliminar -->
                        echo "<a href='#deleteEmployeeModal' class='delete' data-toggle='modal' data-id='" . $row['id_producto'] . "'><img src='img/basuraroja.png'></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No se encontraron productos.";
                }
                $conn->close();
                ?>
            </table>
        </div>
    </div>
    <!-- ADD Modal HTML -->
	<div id="addProducto" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="agregar_producto.php" method="POST" enctype="multipart/form-data">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar producto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="nombre" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Descripción</label>
							<input type="text" name="descripcion" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Precio</label>
							<input type="text" name="precio" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Imagen</label>
							<input type="file" name="imagen" class="form-control" required accept="image/*">
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<button type="submit" class="btn btn-success">Agregar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php require_once "vistas/parte_inferior.php"?>