<?php
require_once "koneksi.php";

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE mahasiswa SET 
                nim = '$nim',
                nama = '$nama', 
                no_hp = '$no_hp', 
                jenis_kelamin = '$jenis_kelamin', 
                jurusan = '$jurusan', 
                alamat = '$alamat' 
                WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: tampil.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
