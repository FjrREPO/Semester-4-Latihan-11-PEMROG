<?php
    require_once "koneksi.php";
    if(isset($_POST['submit'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];

        if($nama != "" && $nim != "" && $no_hp != "" && $jenis_kelamin != "" && $jurusan != "" && $alamat != ""){
            $sql = "INSERT INTO mahasiswa (`nama`, `nim`, `no_hp`, `jenis_kelamin`, `jurusan`, `alamat`) VALUES ('$nama', '$nim', '$no_hp', '$jenis_kelamin', '$jurusan', '$alamat')";
            if (mysqli_query($conn, $sql)) {
                header("location: tampil.php");
            } else {
                echo "Ada yang salah: " . mysqli_error($conn);
            }
        }else{
            echo "Isi semua data";
        }
    }
?>