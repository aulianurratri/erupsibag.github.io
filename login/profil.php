<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Biodata</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
            text-align: center;
        }

        .profile-container img {
            border-radius: 100%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-container h2 {
            margin: 10px 0;
            color: #333;
        }

        .profile-container p {
            margin: 5px 0;
            color: #666;
        }

        .profile-container .label {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="profile-container">
        <img src="../gambar/profil.JPG" alt="Foto Profil">
        <h2>Aulia Nur Ratri</h2>
        <p><span class="label">Jurusan:</span> Sistem Informasi</p>
        <p><span class="label">Fakultas:</span> Fakultas Komputer</p>
        <p><span class="label">Jenis Kelamin:</span> Perempuan</p>
        <p><span class="label">Agama:</span> Islam</p>
        <p><span class="label">Alamat:</span> Kp Sawah Lega Rt03/Rw14</p>
        <p><span class="label">Hobi:</span> Mendengarkan Musik Dan Bernyanyi</p>
        <p><span class="label">Lagu Kesukaan:</span>Arsy Widianto, Tiara Andini - Masih Hatiku </p>   <audio controls>
            <source
                src="../vid/Arsy Widianto, Tiara Andini - Masih Hatiku (Official Music Video).mp3"
                type="audio/mpeg">
        </audio><br>
    </div>

</body>
</html>
