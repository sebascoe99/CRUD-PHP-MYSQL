<?php  
include("db.php");

if(isset($_POST['save_task'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = (int)$_POST['edad'];
        $sexo = $_POST['sexo'];
        $correo = $_POST['correo'];


        $query= "INSERT INTO alumno(nombre, apellido, edad, sexo, correo) VALUES ('$nombre', '$apellido', '$edad', '$sexo', '$correo')";  
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query failed");
        }

        echo'<script type="text/javascript">
        alert("Registro Guardado");
        window.location.href="index.php";
        </script>';
    }
?>