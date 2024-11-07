<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Aset Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">Manajemen Aset Kendaraan</h1>
            <nav>
                <ul class="flex space-x-8">
                    <li><a href="#" class="hover:underline text-lg">Peminjaman</a></li>
                    <li><a href="#" class="hover:underline text-lg" onclick="openModalBalik()">Pengembalian</a></li>
                    <li><a href="#" class="hover:underline text-lg" onclick="openModal()">Tambah Aset Kendaraan</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-20 p-4 bg-white rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Selamat Datang di Kementerian PUPR</h2>
        <p class="mb-4">Kami berkomitmen untuk menyediakan layanan terbaik bagi masyarakat Indonesia.</p>

       <!-- Vehicle Asset Boxes -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
    <!-- Vehicle 1 -->
<div class="bg-blue-100 p-6 rounded-lg shadow-md flex">
    <div class="flex-1">
        <h3 class="text-lg font-semibold mb-2">TOYOTA HIACE</h3>
        <p class="text-gray-700">Plat Nomor: B 7415 SPA</p>
        <div class="flex space-x-4 mt-4">
            <button class="bg-blue-800 text-white px-4 py-2 rounded" onclick="openModalDetail1()">Detail</button>
            <button class="bg-green-600 text-white px-4 py-2 rounded" onclick="openModalPeminjaman1()">Peminjaman</button>
        </div>
    </div>
    <!-- Placeholder for Vehicle 2 Image -->
    <div class="ml-6 flex-shrink-0 w-40 h-40 bg-gray-300 rounded-lg">
        <img src="https://via.placeholder.com/150" alt="Foto TOYOTA HIACE" class="w-full h-full object-cover rounded-lg">
    </div>
</div>


    <!-- Vehicle 2 -->
<div class="bg-blue-100 p-6 rounded-lg shadow-md flex">
    <div class="flex-1">
        <h3 class="text-lg font-semibold mb-2">TOYOTA HIACE</h3>
        <p class="text-gray-700">Plat Nomor: B 7417 SPA</p>
        <div class="flex space-x-4 mt-4">
            <button class="bg-blue-800 text-white px-4 py-2 rounded" onclick="openModalDetail2()">Detail</button>
            <button class="bg-green-600 text-white px-4 py-2 rounded" onclick="openModalPeminjaman2()">Peminjaman</button>
        </div>
    </div>
    <!-- Placeholder for Vehicle 2 Image -->
    <div class="ml-6 flex-shrink-0 w-40 h-40 bg-gray-300 rounded-lg">
        <img src="https://via.placeholder.com/150" alt="Foto TOYOTA HIACE" class="w-full h-full object-cover rounded-lg">
    </div>
</div>


    </main>

    <!-- Modal Form Pertama -->
    <div id="modal1" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white w-1/2 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-bold mb-4">Tambah Aset Kendaraan</h3>
            <form id="assetForm">
                <div class="mb-4">
                    <label class="block text-gray-700">Kode Barang</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Masukkan kode barang" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Merek</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Masukkan merek" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Tipe</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Masukkan tipe" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Tahun Pembuatan</label>
                    <input type="number" class="w-full p-2 border rounded" placeholder="Masukkan tahun pembuatan" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Nomor BPKB</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Masukkan nomor BPKB" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Nomor STNK</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Masukkan nomor STNK" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Kondisi</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Masukkan kondisi" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Nomor SK PSP</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Masukkan nomor SK PSP" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Nomor Polisi</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Masukkan nomor polisi" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closeModal()">Batal</button>
                    <button type="button" class="bg-blue-800 text-white px-4 py-2 rounded" onclick="openModal2()">Next</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Form Kedua untuk Upload Foto -->
    <div id="modal2" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white w-1/2 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-bold mb-4">Unggah Foto Kendaraan</h3>
            <form id="uploadForm" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="block text-gray-700">Foto Kendaraan</label>
                    <input type="file" class="w-full p-2 border rounded" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closeModal2()">Batal</button>
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Form pengembalian -->
    <div id="modal3" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white w-1/2 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-bold mb-4">Unggah Berita Acara Serah Terima Kendaraan</h3>
            <form id="uploadForm" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="block text-gray-700">Berita Acara Serah Terima Kendaraan</label>
                    <input type="file" class="w-full p-2 border rounded" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closeModalBalik()">Batal</button>
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Form peminjaman1 -->
    <div id="modal6" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white w-1/2 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-bold mb-4">Unggah Berita Acara Serah Terima Kendaraan</h3>
            <form id="uploadForm" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="block text-gray-700">Berita Acara Serah Terima Kendaraan</label>
                    <input type="file" class="w-full p-2 border rounded" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closeModalPeminjaman1()">Batal</button>
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

     <!-- Modal Form peminjaman2 -->
     <div id="modal7" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white w-1/2 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-bold mb-4">Unggah Berita Acara Serah Terima Kendaraan</h3>
            <form id="uploadForm" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="block text-gray-700">Berita Acara Serah Terima Kendaraan</label>
                    <input type="file" class="w-full p-2 border rounded" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closeModalPeminjaman2()">Batal</button>
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Form Detail 1 -->
<div id="modal4" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white w-1/4 p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-bold mb-4">Detail Kendaraan</h3>
        <div class="space-y-4">
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">Mesin:</span>
                <span class="text-gray-900">Off</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">Oli Level:</span>
                <span class="text-gray-900">Normal</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">Odometer:</span>
                <span class="text-gray-900">XX km</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">Suhu Mesin:</span>
                <span class="text-gray-900">XX ℃</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">GPS IMEI:</span>
                <span class="text-gray-900">8637XXX</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">GSM No:</span>
                <span class="text-gray-900">0813XXX</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">GSM Signal:</span>
                <span class="text-gray-900">XX dBm</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">Koordinat:</span>
                <span class="text-gray-900">-6.228038, 106.791272</span>
            </div>
        </div>
        <div class="flex justify-end mt-6">
            <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded" onclick="closeModalDetail1()">Tutup</button>
        </div>
    </div>
</div>


    <!-- Modal Form Detail2 -->
    <div id="modal5" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white w-1/4 p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-bold mb-4">Detail Kendaraan</h3>
        <div class="space-y-4">
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">Mesin:</span>
                <span class="text-gray-900">Off</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">Oli Level:</span>
                <span class="text-gray-900">Normal</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">Odometer:</span>
                <span class="text-gray-900">XX km</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">Suhu Mesin:</span>
                <span class="text-gray-900">XX ℃</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">GPS IMEI:</span>
                <span class="text-gray-900">8637XXX</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">GSM No:</span>
                <span class="text-gray-900">0813XXX</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">GSM Signal:</span>
                <span class="text-gray-900">XX dBm</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-700 font-semibold">Koordinat:</span>
                <span class="text-gray-900">-6.228038, 106.791272</span>
            </div>
        </div>
        <div class="flex justify-end mt-6">
            <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded" onclick="closeModalDetail2()">Tutup</button>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer class="bg-blue-800 text-white p-4 mt-10">
        <div class="container mx-auto text-center">
            <p>© 2024 Kementerian Pekerjaan Umum dan Perumahan Rakyat. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- JavaScript for Modal Tambah Asset -->
    <script>
        function openModal() {
            document.getElementById('modal1').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal1').classList.add('hidden');
        }

        function openModal2() { 
            document.getElementById('modal1').classList.add('hidden');
            document.getElementById('modal2').classList.remove('hidden');
        }

        function closeModal2() {
            document.getElementById('modal2').classList.add('hidden');
        }
    </script>

    <!-- JavaScript for Modal Pengembalian -->
    <script>
        function openModalBalik() {
            document.getElementById('modal3').classList.remove('hidden');
        }

        function closeModalBalik() {
            document.getElementById('modal3').classList.add('hidden');
        }
    </script>

     <!-- JavaScript for Modal peminjaman -->
     <script>
        function openModalPeminjaman1() {
            document.getElementById('modal6').classList.remove('hidden');
        }

        function closeModalPeminjaman1() {
            document.getElementById('modal6').classList.add('hidden');
        }
        
        function openModalPeminjaman2() {
            document.getElementById('modal7').classList.remove('hidden');
        }

        function closeModalPeminjaman2() {
            document.getElementById('modal7').classList.add('hidden');
        }
    </script>


<script>
        function openModalDetail1() {
            document.getElementById('modal4').classList.remove('hidden');
        }

        function closeModalDetail1() {
            document.getElementById('modal4').classList.add('hidden');
        }

        function openModalDetail2() {
            document.getElementById('modal5').classList.remove('hidden');
        }

        function closeModalDetail2() {
            document.getElementById('modal5').classList.add('hidden');
        }
    </script>


</body>
</html>
