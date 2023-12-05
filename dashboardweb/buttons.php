<?php require_once "vistas/parte_superior.php"?>
<?php require("conexion.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).on("click", ".edit", function () {
        var id_usuario = $(this).data('id'); // Obtener el ID del usuario desde el botón "Editar"
        var nombre = $(this).data('nombre'); // Obtener el nombre del usuario
        var email = $(this).data('email'); // Obtener el email del usuario
        var celular = $(this).data('celular'); // Obtener el celular del usuario
        var contrasena = $(this).data('contrasena'); // Obtener la contraseña del usuario

        // Rellenar los campos del formulario con los datos del usuario
        $("#id_usuario").val(id_usuario);
        $("#nombre").val(nombre);
        $("#email").val(email);
        $("#celular").val(celular);
        $("#contrasena").val(contrasena);

        // Mostrar el modal de edición
        $("#editEmployeeModal").modal();
    });
</script>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Control de <b>USUARIOS</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><img src="img/usuarioverde.png"><span>Agregar nuevo usuario</span></a>
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
                        <th>Correo</th>
						<th>Celular</th>
                        <th>Password</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                <?php
                // Realiza una consulta para seleccionar todos los usuarios
                $sql = "SELECT id_registro,nombre, correo, celular, password FROM registro";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Itera a través de cada fila de datos
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>"  . $row['id_registro'] . "</td>";
                        echo "<td>" . $row['nombre'] . "</td>";
                        echo "<td>" . $row['correo'] . "</td>";
                        echo "<td>" . $row['celular'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "<td>";
                        //<!-- Botón de editar -->
                        echo "<a href='#editEmployeeModal' class='edit' data-toggle='modal' data-id='" . $row['id_registro'] . "' data-nombre='" . $row['nombre'] . "' data-email='" . $row['correo'] . "' data-celular='" . $row['celular'] . "' data-contrasena='" . $row['password'] . "'><img src='img/editar.png'></a>";
                        //<!-- Botón de eliminar -->
                        echo "<a href='#deleteEmployeeModal' class='delete' data-toggle='modal' data-id='" . $row['id_registro'] . "'><img src='img/basuraroja.png'></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No se encontraron usuarios.";
                }
                $conn->close();
                ?>
            </table>
        </div>
    </div>
	<!-- ADD Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="agregar_usuario.php" method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="nombre" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Correo</label>
							<input type="email" name="correo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Celular</label>
							<input type="text" name="celular" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input type="text" name="password" class="form-control" required>
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
	<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="editar_usuario.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" name="celular" id="celular" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="text" class="form-control" name="contrasena" id="contrasena" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_usuario" id="id_usuario">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-info" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</div>


	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="deleteForm">
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Estás seguro de borrar este usuario?</p>
						<p class="text-warning"><small>Esta acción no puede revertirse</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" id="deleteButton" value="Borrar">
					</div>
				</form>
			</div>
		</div>
	</div>

<!-- Agrega esto antes de cerrar </body> -->
<script>
    $(document).ready(function () {
        // Manejar clics en el botón Eliminar
        $(".delete").click(function () {
            // Obtener el ID del usuario que se va a eliminar
            var userId = $(this).data('id');

            // Configurar el formulario de eliminación
            $("#deleteForm").attr("data-id", userId);

            // Mostrar el modal de eliminación
            $("#deleteEmployeeModal").modal();
        });

        // Manejar clics en el botón Borrar dentro del modal de eliminación
        $("#deleteButton").click(function () {
            // Obtener el ID del usuario desde el formulario de eliminación
            var userId = $("#deleteForm").attr("data-id");

            // Hacer una solicitud AJAX para eliminar el usuario en el servidor
            $.ajax({
                type: "POST",
                url: "borrar_usuario.php", // Archivo PHP que maneja la eliminación
                data: { id_usuario: userId },
                success: function (response) {
                    alert(response); // Muestra la respuesta del servidor
                    // Actualiza la página para reflejar los cambios
                    window.location.reload();
                }
            });

            // Cerrar el modal después de hacer clic en Borrar
            $("#deleteEmployeeModal").modal('hide');
        });
    });
</script>

</body>
</html>
<?php require_once "vistas/parte_inferior.php"?>