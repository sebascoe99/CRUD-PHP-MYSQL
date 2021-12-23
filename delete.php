<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM alumno WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result){
            die("Query Failded");
        }
   
        echo'<script type="text/javascript">
            alert("Registro Eliminado");
            window.location.href="index.php";
            </script>';
        /*header("Location: index.php");*/
    }
?>