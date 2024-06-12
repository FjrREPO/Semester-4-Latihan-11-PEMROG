<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="w-screen h-svh p-5">
        <div class="flex flex-row justify-between items-center mb-5">
            <h1 class="text-3xl font-bold">CRUD Mahasiswa 4798</h1>
            <a href="tambah.php"
                class="flex flex-row items-center h-full justify-center gap-2 w-fit px-5 py-2.5 mb-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 duration-300"><i
                    class="fa-solid fa-plus"></i><span>Tambah</span></a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nim
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No Hp
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Kelamin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jurusan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "koneksi.php";
                    $sql_query = "SELECT * FROM mahasiswa";
                    if ($result = $conn->query($sql_query)) {
                        while ($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $nim = $row['nim'];
                            $nama = $row['nama'];
                            $no_hp = $row['no_hp'];
                            $jenis_kelamin = $row['jenis_kelamin'];
                            $jurusan = $row['jurusan'];
                            $alamat = $row['alamat'];
                            ?>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo $nim; ?></th>
                                <td class="px-6 py-4"><?php echo $nama; ?></td>
                                <td class="px-6 py-4"><?php echo $no_hp; ?></td>
                                <td class="px-6 py-4"><?php echo $jenis_kelamin; ?></td>
                                <td class="px-6 py-4"><?php echo $jurusan; ?></td>
                                <td class="px-6 py-4"><?php echo $alamat; ?></td>
                                <td class="px-6 py-4 gap-3 flex flex-row items-center">
                                    <a href="edit.php?id=<?php echo $id; ?>"
                                        class="font-medium text-blue-600 hover:underline">
                                        <i class="fa-solid fa-pen-to-square text-[18px]"></i>
                                    </a>
                                    <a href="actions-hapus.php?id=<?php echo $id; ?>"
                                        class="font-medium text-red-600 hover:underline" onclick="return confirmDelete()">
                                        <i class="fa-solid fa-trash text-[18px]"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function confirmDelete() {
            return confirm("Anda yakin ingin menghapus data ini?");
        }
    </script>
</body>

</html>