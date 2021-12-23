<?php  include("db.php")?>

<?php include("includes/header.php") ?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4">

            <div class="card card-body">

                <form action="save.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control"
                            placeholder="Ingrese nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellido" class="form-control"
                            placeholder="Ingrese apellido" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="edad" class="form-control"
                            placeholder="Ingrese edad" autofocus>
                    </div>
                    <div class="form-group">
                            <select name="sexo" class="form-control">
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="correo" class="form-control"
                            placeholder="Ingrese correo" autofocus>
                    </div>
                    <input type="submit"  class="btn btn-success btn-block"
                    name="save_task" value="Guardar">
                </form>
            </div>

        </div>

        <div class="col-md-8">
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Edad</th>
                                <th>Fecha de creacion</th>
                                <th>Sexo</th>
                                <th>Correo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM alumno";
                            $result_alumnos = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($result_alumnos)){ ?>
                                <tr>
                                    <td><?php echo $row['nombre'] ?></td>
                                    <td><?php echo $row['apellido'] ?></td>
                                    <td><?php echo $row['edad'] ?></td>
                                    <td><?php echo $row['fecha_creacion'] ?></td>
                                    <td><?php echo $row['sexo'] ?></td>
                                    <td><?php echo $row['correo'] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                            Editar
                                        </a>
                                        <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>



  
