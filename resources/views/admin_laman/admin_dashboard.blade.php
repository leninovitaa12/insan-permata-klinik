<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BerandaDasboard</title>
    <link href="{{ asset('css/admindashboard.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>

    </style>

    <!--Custom CSS-->
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
</head>
<body>
    <div class="container-cs">
        <!-- Sidebar -->
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
        </div>
        <!-- End Sidebar -->

        <!-- Content -->
        <div class="content">
            <div class="anakcontent">
                <div class=" ">
                    <h1 class="txtdb"> Dashboard</h1>
                </div>
                <div class="kotak" >
                    <div class="isi">
                        <h1 class="ini"> Halo, Yola Septianingrum! </h1>
                        <h5 class="itu"> Apa yang anda butuhkan hari ini?</h5>
                    </div>
                    <div class="Klinik">
                        <img src="{{ asset ('storage/admin-asset/payment.png') }}" class="gambar-euy" alt="gambar dashboard " >
                    </div>
                </div>
                <div class="kotakbawah">
                    <div class="kotakdalam">
                        <div class="kotakaktif">
                            <h1 class="isikotakaktif"> 20  Jumlah Klien Aktif  </h1>
                        </div>
                        <div class="kotakaktif">
                            <h1 class="isikotakaktif">  5  Jumlah Klien Non Aktif  </h1>
                        </div>
                        <div class="kotakaktif">
                            <h1 class="isikotakaktif">  10 Jumlah Karyawan  </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</body>
</html>
