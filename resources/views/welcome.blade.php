<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    h1,h2 {
        align-items: center;
    }
</style>
<body>
    <div>

        <h1>Selamat Datang</h1>
        <div>
        <h2>Lihat Data Siswa</h2>
            <button><a href="{{ route('siswa.index') }}">Daftar Siswa</a></button>
        </div>
    </div>
</body>
</html>