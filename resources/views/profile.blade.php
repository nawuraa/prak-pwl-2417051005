<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <!-- Google Fonts: Editorial Luxury Serif -->
   <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Playfair Display', Georgia, serif;
            background-image: linear-gradient(rgba(40, 11, 15, 0.4), rgba(40, 11, 15, 0.4)), url("https://i.pinimg.com/1200x/37/fe/0f/37fe0fb690f5cded84bd2e4a5c49dd12.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Card Italian Roast */
        .card {
            background-color: rgba(40, 11, 15, 0.88);
            border: 1px solid #7B694E;
            backdrop-filter: blur(10px);
            width: 320px;
            padding: 34px 24px;
            border-radius: 20px;
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.4);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Foto Avatar */
        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 26px;
            border: 3px solid #C6B39A;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.35);
        }

        /* Kotak data Tamarind */
        .info-box {
            width: 100%;
            background-color: #3B1319;
            border: 1px solid rgba(123, 105, 78, 0.45);
            border-radius: 10px;
            padding: 10px 14px;
            margin-bottom: 12px;
            text-align: center;
            box-sizing: border-box;
        }

        /* Label Camel Coat */
        .info-label {
            font-family: 'Bodoni Moda', serif;
            font-size: 11px;
            font-style: italic;
            color: #C6B39A;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 3px;
        }

        /* Value teks luxury */
        .info-value {
            font-family: 'Playfair Display', serif;
            font-size: 17px;
            font-weight: 600;
            letter-spacing: 0.5px;
            color: #F7EFE5;
        }
    </style>
</head>
<body>

    <div class="card">
        <!-- Foto Profil -->
        <img src="https://i.pinimg.com/736x/f1/8d/a3/f18da343a659a0b5569c07a2d4cab088.jpg" alt="Foto Profil" class="avatar">

        <!-- Nama -->
        <div class="info-box">
            <div class="info-label">Nama</div>
            <div class="info-value">{{ $nama }}</div>
        </div>

        <!-- Kelas -->
        <div class="info-box">
            <div class="info-label">Kelas</div>
            <div class="info-value">{{ $kelas }}</div>
        </div>

        <!-- NPM -->
        <div class="info-box">
            <div class="info-label">NPM</div>
            <div class="info-value">{{ $npm }}</div>
        </div>
    </div>

</body>
</html>