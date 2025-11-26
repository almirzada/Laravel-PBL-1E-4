<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Kampus - Politeknik Negeri Batam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0056b3;
            --secondary-color: #f8f9fa;
            --accent-color: #ffc107;
            --text-color: #333;
            --light-color: #fff;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-color);
            background-color: #f5f7fa;
        }
        
        .navbar {
            background-color: var(--primary-color);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand img {
            height: 50px;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 84, 179, 0.8), rgba(0, 84, 179, 0.9)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 30px;
            padding-bottom: 15px;
            text-align: center;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent-color);
        }
        
        .news-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 30px;
            height: 100%;
        }
        
        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .news-card img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .news-date {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .news-title {
            font-weight: 600;
            margin: 10px 0;
            color: var(--primary-color);
        }
        
        .read-more {
            color: var(--primary-color);
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }
        
        .read-more:hover {
            color: #003d82;
        }
        
        .read-more i {
            margin-left: 5px;
            transition: transform 0.3s;
        }
        
        .read-more:hover i {
            transform: translateX(5px);
        }
        
        .slider-container {
            overflow: hidden;
            position: relative;
            padding: 20px 0;
        }
        
        .slider-track {
            display: flex;
            animation: scroll 30s linear infinite;
        }
        
        .slider-track:hover {
            animation-play-state: paused;
        }
        
        .slider-item {
            flex: 0 0 300px;
            margin: 0 15px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .slider-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-300px * 6));
            }
        }
        
        .footer {
            background-color: var(--primary-color);
            color: white;
            padding: 40px 0 20px;
        }
        
        .footer a {
            color: #ddd;
            text-decoration: none;
        }
        
        .footer a:hover {
            color: white;
        }
        
        .social-icons a {
            display: inline-block;
            margin-right: 15px;
            font-size: 1.2rem;
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 60px 0;
            }
            
            .slider-item {
                flex: 0 0 250px;
            }
            
            @keyframes scroll {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(calc(-250px * 6));
                }
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://www.polibatam.ac.id/wp-content/uploads/2022/01/poltek.png" alt="Politeknik Negeri Batam">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                   
                     
                    <li class="nav-item">
                        <a class="nav-link" href="/daftar">Pendaftaran</a>
                    </li><li class="nav-item">
                        <a class="nav-link" href="/daftar">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold">Selamat Datang di Event Informasi</h1>
            <p class="lead">Politeknik Negeri Batam</p>
            <a href="/daftar" class="btn btn-warning btn-lg mt-3">Daftar Sekarang</a>
        </div>
    </section>

    <!-- Berita Terbaru -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Berita Terbaru</h2>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="news-card">
                        <img src="https://images.unsplash.com/photo-1535131749006-b7f58c99034b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Turnamen Bulutangkis">
                        <div class="card-body">
                            <div class="news-date"><i class="far fa-calendar-alt me-2"></i>15 Oktober 2025</div>
                            <h3 class="news-title">Turnamen Bulutangkis Antar Program Studi</h3>
                            <p class="card-text">Polibatam kembali mengadakan turnamen bulutangkis tahunan yang diikuti oleh seluruh program studi.</p>
                            <a href="/detail-badminton" class="read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="news-card">
                        <img src="https://images.unsplash.com/photo-1575361204480-aadea25e6e68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Kompetisi Futsal">
                        <div class="card-body">
                            <div class="news-date"><i class="far fa-calendar-alt me-2"></i>12 Oktober 2025</div>
                            <h3 class="news-title">Kompetisi Futsal Mahasiswa Polibatam 2025</h3>
                            <p class="card-text">Tunjukkan skill futsal terbaikmu dalam kompetisi bergengsi yang diadakan oleh BEM Polibatam.</p>
                            <a href="/detail-futsal" class="read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="news-card">
                        <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1490&q=80" alt="Liga Basket">
                        <div class="card-body">
                            <div class="news-date"><i class="far fa-calendar-alt me-2"></i>10 Oktober 2023</div>
                            <h3 class="news-title">Liga Basket Mahasiswa Polibatam Musim 2025/2026</h3>
                            <p class="card-text">Siap-siap untuk liga basket paling seru di kampus! Pendaftaran tim dibuka hingga 25 Oktober.</p>
                            <a href="/detail-basket" class="read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slider Berita -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Galeri Kegiatan</h2>
            <div class="slider-container">
                <div class="slider-track">
                    <!-- Item 1 -->
                    <div class="slider-item">
                        <img src="https://images.=80" alt="Kegiatan Kampus">
                    </div>
                    <!-- Item 2 -->
                    <div class="slider-item">
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Seminar">
                    </div>
                    <!-- Item 3 -->
                    <div class="slider-item">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Workshop">
                    </div>
                    <!-- Item 4 -->
                    <div class="slider-item">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Olahraga">
                    </div>
                    <!-- Item 5 -->
                    <div class="slider-item">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Presentasi">
                    </div>
                    <!-- Item 6 -->
                    <div class="slider-item">
                        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Festival">
                    </div>
                    <!-- Duplikat untuk efek loop -->
                    <div class="slider-item">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Kegiatan Kampus">
                    </div>
                    <div class="slider-item">
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Seminar">
                    </div>
                    <div class="slider-item">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Workshop">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Politeknik Negeri Batam</h5>
                    <p>Jl. Ahmad Yani, Batam Kota, Batam 29461</p>
                    <p>Kepulauan Riau, Indonesia</p>
                    <p>Telp: (0778) 469856</p>
                    <p>Email: info@polibatam.ac.id</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Beranda</a></li>
                        
                       
                        <li><a href="/daftar">Pendaftaran</a></li>
                        <li><a href="/daftar">Admin</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Ikuti Kami</h5>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2023 Politeknik Negeri Batam. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>