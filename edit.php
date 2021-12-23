<?php
    include("db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM alumno WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $edad = $row['edad'];
            $sexo = $row['sexo'];
            $correo = $row['correo'];
        }

    }


    if(isset($_POST['actualizar'])){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $correo = $_POST['correo'];

        $query = "UPDATE alumno set nombre = '$nombre', apellido = '$apellido', edad = '$edad', sexo = '$sexo', correo = '$correo' WHERE id = '$id'";
        mysqli_query($conn, $query);

        echo'<script type="text/javascript">
            alert("Registro Actualizado");
            window.location.href="index.php";
            </script>';
    }

?>

<?php include("includes/header.php"); ?>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit.php" method="POST">

                        <input type="hidden" name='id' value="<?php echo $id?>">
                        
                        <div class="form-group">
                                <input type="text" name='nombre' value="<?php echo $nombre?>" class="form-control" placeholder="Actualice el nombre">

                        </div>
                        <div class="form-group">
                                <input type="text" name='apellido' value="<?php echo $apellido?>" class="form-control" placeholder="Actualice el apellido">

                        </div>
                        <div class="form-group">
                                <input type="text" name='edad' value="<?php echo $edad?>" class="form-control" placeholder="Actualice la edad">

                        </div>
                        <div class="form-group">
                                <input type="text" name='sexo' value="<?php echo $sexo?>" class="form-control" placeholder="Actualice el sexo">

                        </div>
                        <div class="form-group">
                                <input type="text" name='correo' value="<?php echo $correo?>" class="form-control" placeholder="Actualice el correo">

                        </div>
                        <button class="btn-success" name = "actualizar">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    
    </div>


<?php include("includes/footer.php"); ?>
