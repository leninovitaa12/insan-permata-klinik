<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kehadiran Klien</title>
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
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main Content -->
        <div class="content">
            <div class="container mt-5">
                <h1 class="text-center text-black">Absen Kehadiran Klien</h1>
                <form id="absenForm">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="paket" class="form-label">Paket</label>
                        <select id="paket" name="paket" class="form-select">
                            <!-- Contoh pilihan paket yang bisa dipilih -->
                            <option value="1">Paket A</option>
                            <option value="2">Paket B</option>
                            <option value="3">Paket C</option>
                            <option value="4">Paket D</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label><br>

                        <!-- Radio button untuk Sakit, Izin, dan Absen -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="keterangan" id="sakit" value="Sakit">
                            <label class="form-check-label" for="sakit">Sakit</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="keterangan" id="izin" value="Izin">
                            <label class="form-check-label" for="izin">Izin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="keterangan" id="absen" value="Absen">
                            <label class="form-check-label" for="absen">Absen</label>
                        </div>
                    </div>

                    <!-- Tombol Simpan -->
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk menyimpan data kehadiran ke localStorage dengan keterangan
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('absenForm');

            form.addEventListener('submit', function (event) {
                event.preventDefault();

                const nama = document.getElementById('nama').value;
                const tanggal = document.getElementById('tanggal').value;
                const paket = document.getElementById('paket').value;
                const keterangan = document.querySelector('input[name="keterangan"]:checked').value;

                // Data untuk absen dengan keterangan
                const absenData = {
                    nama: nama,
                    tanggal: tanggal,
                    paket: paket,
                    keterangan: keterangan
                };

                // Simpan data kehadiran
                simpanData(absenData);

                // Arahkan kembali ke halaman riwayatkehadiranklien
                window.location.href = 'riwayatkehadiranklien';
            });
        });

        // Fungsi untuk menyimpan data kehadiran ke localStorage
        function simpanData(absenData) {
            absenData.timestamp = new Date().getTime(); // Tambahkan timestamp saat penyimpanan

            // Dapatkan nomor urutan terakhir
            const lastIndex = getLastIndex();

            // Buat kunci unik untuk data baru
            const newKey = absenData${lastIndex + 1};

            localStorage.setItem(newKey, JSON.stringify(absenData)); // Simpan data dengan kunci baru
        }

        // Fungsi untuk mendapatkan nomor urutan terakhir
        function getLastIndex() {
            let lastIndex = 0;
            for (let i = 0; i < localStorage.length; i++) {
                const key = localStorage.key(i);
                if (key.startsWith('absenData')) {
                    const currentIndex = parseInt(key.replace('absenData', ''));
                    if (currentIndex > lastIndex) {
                        lastIndex = currentIndex;
                    }
                }
            }
            return lastIndex;
        }
    </script>
</body>
</html>
