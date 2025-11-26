<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Admin - Politeknik Negeri Batam</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    :root {
      --primary: #004aad;
      --secondary: #e63946;
      --success: #28a745;
      --warning: #ffc107;
      --light: #f8f9fa;
      --dark: #343a40;
    }

    body {
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      color: #333;
      line-height: 1.6;
      min-height: 100vh;
    }

    /* Header */
    .header {
      background-color: white;
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
      padding: 15px 0;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .logo img {
      height: 60px;
      width: auto;
      transition: transform 0.3s ease;
    }

    .logo:hover img {
      transform: scale(1.05);
    }

    nav {
      display: flex;
      gap: 25px;
    }

    nav a {
      color: var(--primary);
      text-decoration: none;
      font-weight: 600;
      font-size: 18px;
      transition: all 0.3s ease;
      padding: 8px 15px;
      border-radius: 8px;
    }

    nav a:hover {
      background-color: var(--primary);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 74, 173, 0.3);
    }

    nav a.active {
      background-color: var(--primary);
      color: white;
      box-shadow: 0 4px 12px rgba(0, 74, 173, 0.3);
    }

    /* Container */
    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
    }

    /* Page Header */
    .page-header {
      text-align: center;
      margin-bottom: 50px;
      background: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      position: relative;
      overflow: hidden;
    }

    .page-header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
    }

    .page-header h1 {
      color: var(--primary);
      font-size: 2.8rem;
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
    }

    .page-header p {
      color: #666;
      font-size: 1.2rem;
      max-width: 600px;
      margin: 0 auto;
    }

    /* Contact Cards */
    .contact-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 30px;
      margin-bottom: 50px;
    }

    .contact-card {
      background: white;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      border: 2px solid transparent;
    }

    .contact-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
      border-color: var(--primary);
    }

    .contact-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
    }

    .admin-avatar {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      margin: 0 auto 20px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 2.5rem;
      border: 5px solid #f8f9fa;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .admin-name {
      font-size: 1.5rem;
      color: var(--primary);
      margin-bottom: 10px;
      font-weight: 700;
    }

    .admin-role {
      color: #666;
      margin-bottom: 25px;
      font-weight: 500;
    }

    .contact-info {
      margin-bottom: 25px;
    }

    .contact-item {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      margin-bottom: 15px;
      padding: 12px;
      background: #f8f9fa;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .contact-item:hover {
      background: var(--primary);
      color: white;
      transform: translateX(5px);
    }

    .contact-item:hover .contact-icon {
      color: white;
    }

    .contact-icon {
      color: var(--primary);
      font-size: 1.2rem;
      width: 20px;
    }

    .contact-text {
      font-weight: 500;
    }

    .contact-actions {
      display: flex