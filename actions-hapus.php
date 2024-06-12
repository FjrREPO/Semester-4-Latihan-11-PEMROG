<?php
    require_once "koneksi.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql_query = "DELETE FROM mahasiswa WHERE id = '$id'";
        
        if (mysqli_query($conn, $sql_query)) {
            header("Location: tampil.php");
        } else {
            echo "Error delete: " . mysqli_error($conn);
        }
    } else {
        echo "Hapus error";
    }

    mysqli_close($conn);
?>
