<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kehadiran</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-"></ion-icon>
                        </span>
                        <span class="title">Insan Permata</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Client</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Kehadiran</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="file-outline"></ion-icon>
                        </span>
                        <span class="title">Billing</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="dollar-outline"></ion-icon>
                        </span>
                        <span class="title">Biodata Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <style>
                /* Styling for table */
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    border: 1px solid #ddd;
                    padding: 8px;
                    text-align: left;
                }
                th {
                    background-color: #f2f2f2;
                }
            </style>
        </head>
        <body>
             <!-- Main Content -->
      <h2 style="text-align: center;">RIWAYAT KEHADIRAN KLIEN</h2>
    <div class="main">
        <table id="riwayatTable">
            <thead>
                <tr>
                    <th>Id clien</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Paket</th>
                    <th>Jenis Kelamin</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="riwayatTableBody">
                <!-- Data riwayat kehadiran akan dimasukkan di sini -->
                <tr>
                    <td>123445</td>
                    <td>sasha</td>
                    <td>serayu</td>
                    <td>098765908</td>
                    <td>1</td>
                    <td>perempuan</td>
                    <td class="radio-container">
                        <label><input type="radio" name="keterangan1" value="sakit"> Sakit</label>
                        <label><input type="radio" name="keterangan1" value="izin"> Izin</label>
                        <label><input type="radio" name="keterangan1" value="absen"> Absen</label>
                    </td>
                    <td class="action-buttons">
                        <button onclick="submitAction(1)">Submit</button>
                        <button onclick="hapusAction(1)">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>1234</td>
                    <td>Asshafa</td>
                    <td>madiun</td>
                    <td>09876-09876</td>
                    <td>2</td>
                    <td>perempuan</td>
                    <td class="radio-container">
                        <label><input type="radio" name="keterangan2" value="sakit"> Sakit</label>
                        <label><input type="radio" name="keterangan2" value="izin"> Izin</label>
                        <label><input type="radio" name="keterangan2" value="absen"> Absen</label>
                    </td>
                    <td class="action-buttons">
                        <button onclick="submitAction(2)">Submit</button>
                        <button onclick="hapusAction(2)">Hapus</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Script for actions -->
    <script>
        function submitAction(rowId) {
            // Lakukan aksi submit sesuai dengan data baris yang dipilih
            alert("Data pada baris ke-" + rowId + " telah disubmit!");
            // Redirect ke halaman billing
            window.location.href = "billing";
        }

        function hapusAction(rowId) {
            // Lakukan aksi hapus sesuai dengan data baris yang dipilih
            alert("Data pada baris ke-" + rowId + " telah dihapus!");
        }
    </script>
</body>
</html>
</html>
