<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Dokter</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link text-white" style="text-decoration: none; display: flex; align-items: center; margin-bottom: 5px;">
                        <i class="nav-icon fas fa-warehouse" style="margin-right: 5px;"></i> <!-- Tambahkan margin kanan -->
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/dokter') }}" class="nav-link text-white" style="text-decoration: none; display: flex; align-items: center; margin-bottom: 5px;">
                        <i class="nav-icon fas fa-user" style="margin-right: 5px;"></i> <!-- Tambahkan margin kanan -->
                        Profil Dokter
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/jadwal_praktik') }}" class="nav-link text-white" style="text-decoration: none; display: flex; align-items: center; margin-bottom: 5px;">
                        <i class="nav-icon fas fa-server" style="margin-right: 5px;"></i> <!-- Tambahkan margin kanan -->
                        Jadwal Praktik
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/jadwal_operasi') }}" class="nav-link text-white" style="text-decoration: none; display: flex; align-items: center; margin-bottom: 5px;">
                    <i class="fa fa-users" style="margin-right: 5px;"></i> <!-- Tambahkan margin kanan -->
                        Ruang Operasi
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Card Container -->
    <div class="container">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-lg-4">
                <!-- Card 1 -->
                <div class="card mb-3" style="margin-top: 20px; border: 3px solid blue;">
                    <div class="card-body">
                        <h2 style="color:blue;">RO-001</h2>
                        <h6>Nama Pasien    : Susilowati</h6>
                        <h6>Nama Dokter    : Dr. Rahma</h6>
                        <h6>Tanggal & Waktu: 9 Maret 2024, 09.00</h6>
                        <h6>Lama Ruang Digunakan : 09.00 - 12.00</h6>
                        <h6>Jenis Operasi  : Pemasangan Implan</h6>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card mb-3" style="margin-top: 20px; border: 3px solid blue;">
                    <div class="card-body">
                        <h2 style="color:blue;">RP-021</h2>
                        <h6>Nama Pasien    : Lastriningsih</h6>
                        <h6>Nama Dokter    : Dr. Budi</h6>
                        <h6>Tanggal & Waktu: 11 Maret 2024, 13.30</h6>
                        <h6>Lama Ruang Digunakan : 13.30 - 15.00</h6>
                        <h6>Jenis Operasi  : Persalinan</h6>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-lg-4" >
                <!-- Card 3 -->
                <div class="card mb-3" style="margin-top: 20px; border: 3px solid blue;">
                    <div class="card-body">
                        <h2 style="color:blue;">RO-001</h2>
                        <h6>Nama Pasien    : Rudiawan</h6>
                        <h6>Nama Dokter    : Dr. Rahma</h6>
                        <h6>Tanggal & Waktu: 17 Maret 2024, 08.30</h6>
                        <h6>Lama Ruang Digunakan : 08.30 - 12.00</h6>
                        <h6>Jenis Operasi  : Bedah Ortodontik</h6>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="card mb-3" style="margin-top: 20px; border: 3px solid blue;">
                    <div class="card-body">
                        <h2 style="color:blue;">RO-001</h2>
                        <h6>Nama Pasien    : Sulistiawan</h6>
                        <h6>Nama Dokter    : Dr. Rahma</h6>
                        <h6>Tanggal & Waktu: 17 Maret 2024, 12.00</h6>
                        <h6>Lama Ruang Digunakan : 12.00 - 14.00</h6>
                        <h6>Jenis Operasi  : Katarak</h6>
                    </div>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-lg-4">
                <!-- Card 5 -->
                <div class="card mb-3" style="margin-top: 20px; border: 3px solid blue;">
                    <div class="card-body">
                        <h2 style="color:blue;">RP-003</h2>
                        <h6>Nama Pasien    : Kusdianti</h6>
                        <h6>Nama Dokter    : Dr. Rahma</h6>
                        <h6>Tanggal & Waktu: 24 Maret 2024, 08.30</h6>
                        <h6>Lama Ruang Digunakan : 08.30 - 12.00</h6>
                        <h6>Jenis Operasi  : Persalinan</h6>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="card mb-3" style="margin-top: 20px; border: 3px solid blue;">
                    <div class="card-body">
                        <h2 style="color:blue;">RO-233</h2>
                        <h6>Nama Pasien    : Susilowati</h6>
                        <h6>Nama Dokter    : Dr. Budi</h6>
                        <h6>Tanggal & Waktu: 30 Maret 2024, 09.00</h6>
                        <h6>Lama Ruang Digunakan : 09.00 - 12.00</h6>
                        <h6>Jenis Operasi  : Pembedahan Rahang</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, only if you need JavaScript features like dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
