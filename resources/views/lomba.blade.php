<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Perlombaan</title>
  <link rel="stylesheet" href="{{ asset("/style-desktop.css") }}">
</head>
<body style="background-image: url('rm222-mind-16.jpg'); background-size: cover; background-repeat: no-repeat;"></body>
  <header>
    <div class="navbar">
      <div class="logo">
        <img src="{{ asset("/cropped-cropped-01_Logo_1_Utama_Polibatam_Vertikal@2x.png") }}" alt="Logo Polibatam">
      </div>
      <nav>
        <a href="{{ url("index.html") }}">Beranda</a>
        <a href="{{ url("lomba.html") }}">Informasi</a>
        <a href="{{ url("daftar.html") }}">Pendaftaran</a>
         <a href="{{ url("daftar.html") }}">Admin</a>
      </nav>
    </div>
  </header>

  <main class="daftar-lomba">
    <h2>Daftar Perlombaan</h2>

    <div class="list-lomba">
      <div class="card">
        <img src="{{ asset("/orang main futsal.jpg") }}" alt="Lomba Futsal">
        <h3>Lomba Futsal</h3>
        <a href="{{ url("detail_futsaaaaaaaaaaaaaaaaaaaaaaaaaaaaal.html") }}" class="btn">Lihat Detail</a>
      </div>

      <div class="card">
        <img src="{{ asset("/orang main basket.jpg") }}" alt="Lomba Basket">
        <h3>Lomba Basket</h3>
        <a href="{{ url("detail_baskte.html") }}" class="btn">Lihat Detail</a>
      </div>

      <div class="card">
        <img src="{{ asset("/orang main badminton.webp") }}" alt="Lomba Badminton">
        <h3>Lomba Badminton (Ganda)</h3>
        <a href="{{ url("detail_badminton.html") }}" class="btn">Lihat Detail</a>
      </div>
    </div>
  </main>

<footer>
  ‎ 
  ‎ 
  ‎ ‎ 
  ‎ 
</footer>
</body>
</html>