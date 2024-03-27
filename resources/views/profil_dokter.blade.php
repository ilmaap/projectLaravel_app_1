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
    <br><br>

    <div class="card" style="width: 250px; margin-left: 20px; border: 3px solid blue;">
    <img src="https://png.pngtree.com/png-clipart/20211116/original/pngtree-muslim-doctor-beautiful-female-in-hijab-png-image_6929117.png" alt="" style="height: 200px; width: 250px">
    <div class="container">
        <h2 style="text-align: center;"><a href="" style="text-decoration: none;">Dr. Rahma</a></h2>
        <h6><b>Spesialis :</b>Bedah</h6>
        <h6><b>Jadwal Praktik :</b>Senin - Jumat</h6>
        <h6><b>Alamat :</b>Jl. Kajang</h6>
        <h6><b>No. HP :</b>0812342239</h6>
    </div>
</div>

    <!-- Bootstrap JS (optional, only if you need JavaScript features like dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
