<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="w-screen h-svh p-5">
        <div class="flex w-full justify-center mb-5">
            <h1 class="text-xl font-bold">Tambah Data Mahasiswa</h1>
        </div>
        <form class="max-w-sm mx-auto space-y-3" method="post" action="actions-tambah.php">
            <div>
                <label for="Tambah Data Mahasiswa" class="block mb-2 text-sm font-medium text-gray-900">Nim</label>
                <div class="flex">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                        <i class="fa-solid fa-list-ol"></i>
                    </span>
                    <input type="text" name="nim"
                        class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5"
                        placeholder="nim">
                </div>
            </div>
            <div>
                <label for="Tambah Data Mahasiswa" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <div class="flex">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <input type="text" name="nama"
                        class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5"
                        placeholder="nama">
                </div>
            </div>
            <div>
                <label for="Tambah Data Mahasiswa" class="block mb-2 text-sm font-medium text-gray-900">No. HP</label>
                <div class="flex">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                        <i class="fa-solid fa-phone"></i>
                    </span>
                    <input type="text" name="no_hp"
                        class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5"
                        placeholder="no_hp">
                </div>
            </div>
            <div>
                <label for="Tambah Data Mahasiswa" class="block mb-2 text-sm font-medium text-gray-900">Jenis
                    Kelamin</label>
                <div class="flex">
                    <span
                        class="inline-flex min-h-[40px] items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                        <i class="fa-solid fa-venus-mars"></i>
                    </span>
                    <div class="flex w-fit items-center ml-5">
                        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki"
                            class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="laki-laki" class="ml-2 text-sm font-medium text-gray-900">Laki-Laki</label>
                    </div>
                    <div class="flex w-fit items-center ml-5">
                        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan"
                            class="text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="perempuan" class="ml-2 text-sm font-medium text-gray-900">Perempuan</label>
                    </div>
                </div>
            </div>
            <div>
                <label for="Tambah Data Mahasiswa" class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                <div class="flex">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </span>
                    <select name="jurusan"
                        class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="Tambah Data Mahasiswa" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                <div class="flex">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                        <i class="fa-solid fa-map-marker-alt"></i>
                    </span>
                    <textarea name="alamat" id="alamat"
                        class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5"
                        placeholder="alamat"></textarea>
                </div>
            </div>
            <div class="flex justify-center w-full">
                <input type="submit" name="submit" id="submit"
                    class="text-md px-4 py-2 bg-blue-500 text-white rounded-lg cursor-pointer hover:bg-blue-600 duration-300"
                    value="Submit">
            </div>
        </form>
    </div>
</body>

</html>