<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Lomba Basket - Politeknik Negeri Batam</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* Reset dan Base Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      background-color: #f5f5f5;
      color: #333;
      line-height: 1.6;
    }

    /* Header & Navbar */
    header {
      background-color: #ffffff; 
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
      padding: 10px 50px;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo img {
      width: 65px;  
      height: auto;
    }

    nav a {
      text-decoration: none;
      color: #004aad;
      font-weight: 600;
      margin-left: 25px;
      transition: color 0.2s;
    }

    nav a:hover {
      color: #007bff;
    }

    /* Main Content */
    .detail-container {
      max-width: 800px;
      margin: 50px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .detail-container h2 {
      text-align: center;
      color: #004aad;
      margin-bottom: 20px;
    }

    .detail-img {
      width: 100%;
      height: 400px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .detail-info h3 {
      color: #004aad;
      margin-top: 15px;
    }

    .detail-info p {
      color: #333;
      line-height: 1.6;
      margin-bottom: 10px;
    }

    /* ====== Rules (Aturan) Section ====== */
    .rules-section {
      margin-top: 20px;
      background: #fff;
      padding: 18px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.06);
    }

    .rules-section h3 {
      color: #c0392b;
      margin-bottom: 10px;
    }

    .rules-content ol {
      margin-left: 18px;
      color: #333;
      line-height: 1.6;
    }

    .rules-content li {
      margin-bottom: 8px;
      font-size: 15px;
    }

    .rules-content strong {
      color: #004aad;
    }

    /* Schedule & Contact */
    .schedule-contact {
      display: flex;
      gap: 20px;
      margin: 30px 0;
    }

    .schedule-box, .contact-box {
      flex: 1;
      background: #f9f9f9;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .schedule-box h3, .contact-box h3 {
      color: #004aad;
      font-size: 1.3rem;
      margin-bottom: 15px;
      padding-bottom: 8px;
      border-bottom: 2px solid #004aad;
    }

    .schedule-box p, .contact-box p {
      margin-bottom: 10px;
      display: flex;
      align-items: center;
    }

    .contact-box i, .schedule-box i {
      color: #004aad;
      margin-right: 10px;
      width: 20px;
    }

    /* Button Group */
    .button-group {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 25px;
    }

    .button-group button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .button-group button:hover {
      background-color: #0056b3;
    }

    .button-group button:last-child {
      background-color: #6c757d;
    }

    .button-group button:last-child:hover {
      background-color: #545b62;
    }

    /* Footer */
    footer {
      background-color: #004aad;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 50px;
    }

    /* Animations */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .detail-container > * {
      animation: fadeIn 0.8s ease forwards;
    }

    /* List styling */
    .detail-info ul {
      margin-left: 20px;
      margin-bottom: 20px;
      color: #333;
    }

    .detail-info li {
      margin-bottom: 8px;
      font-size: 1rem;
    }

    /* Responsif untuk HP */
    @media (max-width: 768px) {
      header {
        padding: 10px 25px;
      }

      nav a {
        margin-left: 15px;
        font-size: 14px;
      }

      .logo img {
        width: 50px;
      }

      .detail-container {
        margin: 30px 15px;
        padding: 20px;
      }

      .schedule-contact {
        flex-direction: column;
      }

      .button-group {
        flex-direction: column;
        align-items: center;
      }

      .button-group button {
        width: 100%;
        justify-content: center;
      }

      .rules-section { 
        padding: 14px; 
      }
      
      .rules-content li { 
        font-size: 14px; 
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="navbar">
      <div class="logo">
        <img src="https://www.polibatam.ac.id/wp-content/uploads/2022/01/poltek.png" alt="Logo Polibatam">
      </div>
      <nav>
      </nav>
    </div>
  </header>

  <main class="detail-container">
    <h2>Lomba Basket Mahasiswa</h2>
<div style="text-align:center; padding:10px;">
  <img src="/images/basket biru.webp"
       alt="Turnamen Basket"
       style="display:block; margin:0 auto 20px auto; max-width:90%; height:auto; border-radius:10px;">
  <h3 style="margin-top:0; font-size:1.5rem; color:#007BFF;"></h3>
</div>

    <div class="detail-info">
      <h3><i class="fas fa-basketball-ball"></i> Basket</h3>
      <p>
        Lomba basket antar jurusan Polibatam ini jadi ajang paling ditunggu tiap tahunnya buat nunjukin siapa yang paling solid dan kompak di lapangan! Nggak cuma soal ngejar poin dan nge-dunk kece, tapi juga soal kerja sama, strategi, dan kekompakan tim dari awal sampai peluit akhir.
      </p>
      <p>
        Suasana pertandingan dijamin seru banget — teriakan supporter, dentuman bola ke lantai, dan semangat juang dari tiap pemain bikin atmosfer lapangan makin panas! Tiap jurusan wajib punya tim terbaiknya, dan siapa pun bisa jadi bintang kalau punya mental kuat dan kerja sama yang solid.
      </p>
      <p>
        Event ini juga bukan cuma tentang menang atau kalah, tapi soal kebersamaan, sportivitas, dan gimana caranya bisa nunjukin semangat mahasiswa Polibatam yang nggak gampang nyerah. Jadi, siapin jersey terbaikmu, latih dribble dan shooting-mu, karena di sinilah tempat buat buktiin skill-mu di lapangan basket Polibatam! 🏀🔥
      </p>

      <h3><i class="fas fa-bullseye"></i> Tujuan</h3>
      <p>
        Meningkatkan semangat sportivitas dan kerja sama tim antar mahasiswa. Selain itu, acara ini juga bertujuan untuk:
      </p>
      <ul>
        <li>Melatih fokus, strategi, dan ketahanan fisik lewat permainan kompetitif</li>
        <li>Membangun solidaritas antar jurusan lewat kompetisi yang positif dan menyenangkan</li>
        <li>Menjadi ajang menyalurkan hobi dan bakat di bidang olahraga basket</li>
        <li>Mengembangkan karakter kepemimpinan dan kerja sama dalam tim</li>
      </ul>
    </div>

    <!-- Rules Section -->
    <section id="rules" class="rules-section">
      <h3><i class="fas fa-clipboard-list"></i> Aturan Permainan</h3>

      <div class="rules-content">
        <ol>
          <li><strong>Jumlah Pemain:</strong> Setiap tim terdiri dari 5 pemain inti dan maksimal 5 pemain cadangan. Minimal 3 pemain harus ada di lapangan untuk melanjutkan pertandingan.</li>
          <li><strong>Durasi Pertandingan:</strong> Pertandingan berlangsung 4 babak × 10 menit waktu kotor. Istirahat antar babak selama 2 menit, dan 5 menit di antara babak kedua dan ketiga.</li>
          <li><strong>Pergantian Pemain:</strong> Pergantian pemain bisa dilakukan kapan saja saat bola mati dengan izin wasit.</li>
          <li><strong>Pelanggaran (Foul):</strong> Setiap pemain hanya boleh melakukan 5 pelanggaran pribadi. Setelah tim melakukan 5 pelanggaran dalam satu babak, tim lawan mendapatkan free throw.</li>
          <li><strong>Three-Point Line:</strong> Poin dihitung 3 jika bola masuk dari luar garis 3 poin, 2 poin dari dalam area, dan free throw bernilai 1 poin.</li>
          <li><strong>Waktu Serangan (Shot Clock):</strong> Setiap tim punya waktu 24 detik buat nyerang dan melakukan tembakan. Kalau bola nggak kena ring dalam waktu itu, bola beralih ke lawan.</li>
          <li><strong>Overtime:</strong> Kalau skor seri di akhir pertandingan, akan ada perpanjangan waktu 5 menit.</li>
          <li><strong>Fair Play:</strong> Dilarang melakukan provokasi, adu mulut, atau tindakan kasar. Pemain wajib menghormati keputusan wasit.</li>
          <li><strong>Perlengkapan Wajib:</strong> Semua pemain harus memakai jersey bernomor, sepatu basket, dan pelindung lutut (opsional).</li>
          <li><strong>Penentuan Pemenang:</strong> Pemenang ditentukan dari skor tertinggi di akhir pertandingan atau perpanjangan waktu.</li>
        </ol>
      </div>
    </section>

    <div class="schedule-contact">
      <div class="schedule-box">
        <h3><i class="fas fa-calendar-alt"></i> Jadwal Pelaksanaan</h3>
        <p><i class="fas fa-calendar-day"></i> <strong>Tanggal:</strong> 13 Desember 2025</p>
        <p><i class="fas fa-clock"></i> <strong>Waktu:</strong> 08.00 - 17.00 WIB</p>
        <p><i class="fas fa-map-marker-alt"></i> <strong>Tempat:</strong> Lapangan Basket Polibatam</p>
        <p><i class="fas fa-user-plus"></i> <strong>Pendaftaran:</strong> 1 November - 5 Desember 2025</p>
      </div>

      <div class="contact-box">
        <h3><i class="fas fa-phone-alt"></i> Kontak Panitia</h3>
        <p><i class="fas fa-user"></i> <strong>Amadeo Duscha Roberd</strong></p>
        <p><i class="fas fa-phone"></i> 0878-1355-90178</p>
        <p><i class="fas fa-envelope"></i> basket.polibatam@email.com</p>
        <p><i class="fas fa-map-marker-alt"></i> Gedung Olahraga Polibatam</p>
      </div>
    </div>

   <div class="button-group">
      <button onclick="window.location.href='daftar'"><i class="fas fa-user-plus"></i> Daftar Sekarang</button>
      <button onclick="window.location.href='{{ route('home') }}'"
        class="btn btn-outline-primary rounded-pill px-4">
  <i class="fas fa-arrow-left"></i> Kembali ke Daftar Lomba
</button>

    </div>
  </main>

  <footer>
    <p>© 2025 Politeknik Negeri Batam - Turnamen Basket Antar Jurusan</p>
  </footer>
</body>
</html>