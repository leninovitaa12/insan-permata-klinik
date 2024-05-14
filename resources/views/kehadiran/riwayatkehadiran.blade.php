<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Kehadiran Klien</title>
    <link href="style1.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .container-cs {
        width: 100%;
        height: 100vh;
        display: flex;
    }

    .aside {
        width: 23%;
        height: 100%;
    }

    .content {
        width: 100%;
        height: 100%;
    }
</style>
<body>
    <div class="container-cs">
        @include('layouts.sidebar')
        <div class="content">
            <div class="container mt-5">
                <div class="card">
                    <h1>Riwayat Kehadiran Klien</h1>
                    <!-- Tambahkan tombol "Tambah" -->
                    <button class="btn btn-primary mb-3" onclick="tambahKehadiran()">Tambah</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Paket</th>
                                <th>Keterangan</th>
                                <th>Aksi</th> <!-- Kolom untuk tombol aksi -->
                            </tr>
                        </thead>
                        <tbody id="absenTableBody">
                            <!-- Data dari form akan ditampilkan di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            loadTableData(); // Memuat data saat halaman dimuat
        });

        // Fungsi untuk memuat data kehadiran dari localStorage ke dalam tabel
        function loadTableData() {
            const tableBody = document.getElementById('absenTableBody');
            tableBody.innerHTML = ''; // Bersihkan isi tabel sebelum memuat data

            // Loop untuk mengambil dan menampilkan data dari localStorage
            for (let i = 0; i < localStorage.length; i++) {
                const key = localStorage.key(i);
                if (key.startsWith('absenData')) {
                    const absenData = JSON.parse(localStorage.getItem(key));

                    // Dapatkan nomor urutan dari kunci
                    const rowNumber = parseInt(key.replace('absenData', ''));

                    // Tambahkan data ke dalam tabel
                    const newRow = document.createElement('tr');
                    newRow.innerHTML = `
                        <td>${rowNumber}</td>
                        <td>${absenData.nama}</td>
                        <td>${absenData.tanggal}</td>
                        <td>${absenData.paket}</td>
                        <td>${absenData.keterangan}</td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="hapusData('${key}')">Hapus</button>
                        </td>
                    `;
                    tableBody.appendChild(newRow);
                }
            }
        }

        // Fungsi untuk mengarahkan ke halaman kehadiranklien
        function tambahKehadiran() {
            window.location.href = 'kehadiranklien'; // Ganti 'kehadiranklien.html' dengan URL halaman yang benar
        }

        // Fungsi untuk menghapus data dari tabel dan localStorage
        function hapusData(key) {
            // Konfirmasi penghapusan
            if (confirm(Anda yakin ingin menghapus data ini?)) {
                localStorage.removeItem(key); // Hapus data dari localStorage
                loadTableData(); // Muat ulang data kehadiran setelah penghapusan
                alert('Data telah dihapus.');
            }
        }
    </script>
</body>
</html>
