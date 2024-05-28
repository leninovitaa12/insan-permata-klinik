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
        @include('layouts.sidebar')
        <!-- End Sidebar -->

        <!-- Content -->
        <div class="content">
            <div class="anakcontent">
                <div class=" ">
                    <h1 class="txtdb"> Dashboard</h1>
                </div>
                <div class="kotak shadow" >
                    <div class="isi">
                        <h1 class="ini"> WELCOME, </h1>
                        <h5 class="itu"> KLINIK INSAN PERMATA</h5>
                        <h3 class="motto">INSAN MANDIRI CAHAYA MASA DEPAN</h3>
                    </div>
                    <div class="Klinik">
                        <img src="{{ asset ('storage/asset/payment.png') }}" class="gambar-euy" alt="gambar dashboard " >
                    </div>
                </div>
                <div class="kotakbawah shadow">
                    <div class="w-100 h-100 justify-content-between d-flex">
                        <div class="w-60 align-content-between h-100 d-flex row">
                            <div class="h-50 w-100">
                                <div class="container d-flex r-15 mb-3 w-100 h-100 bg-purple-semi" >
                                    <!--Ngisi Kontent e-->
                                    <div class=" w-50">
                                        <img src="{{ asset ('storage/asset/klien.png') }}" class="client my-auto" alt="gambar-klien " >
                                    </div>
                                    <div class=" w-50">
                                            <!-- Contoh Penggunaaan Style dengan class yang sudah di deklarasikan di css-->
                                    <h4 class=" f-client ">USER CLIENT</h4>
                                    <h4 class="f-sub">TERDAFTAR</h4>
                                    </div>
                                     <!--end Kontent e-->
                                </div>
                            </div>
                            <div class="h-45 w-100">
                                <div class="container d-flex r-15 w-100 h-100 bg-purple-muda" >
                                     <!--Ngisi Kontent -->
                                     <div class=" w-50">
                                        <img src="{{ asset ('storage/asset/karyawan.png') }}" class="karyawan my-auto" alt="gambar-karyawan " >
                                     </div>
                                     <div class="w-50">
                                         <h4 class="f-karyawan ">EMPLOYEE</h4>
                                         <h4 class="f-kar">YANG TERDAFTAR</h4>
                                          <!--end Kontent -->
                                     </div>
                                
                                </div>
                            </div>
                            
                        </div>
                        <div class="w-40 ps-3 h-100">
                            <div class=" r-15 w-100 h-100 bg-purple" >
                                     <!--Ngisi Kontent e-->
                                     <div class="calendar">
                                        <div class="date" id="date"></div>
                                        <div class="time" id="time"></div>
                                    </div>
                                     <!--end Kontent e-->
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>

    <script>
    function updateTime() {
        const now = new Date();
        const date = now.toLocaleDateString('en-US', {
            weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
        });
        const time = now.toLocaleTimeString('en-US', {
            hour: '2-digit', minute: '2-digit', second: '2-digit'
        });
    
        document.getElementById('date').textContent = date;
        document.getElementById('time').textContent = time;
    }
    
    setInterval(updateTime, 1000);
    updateTime();
</script>
    
</body>
</html>
