<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .form {
            width: 400px;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .form h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            padding: 14px;
        }

        button:hover {
            background-color: green;
        }
    </style>
</head>

<body>

    <div class="form">
        <h1>Edit Data Siswa</h1>
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}" required><br><br>
        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" id="kelas" value="{{ $siswa->kelas }}" required><br><br>
        <label for="absen">Absen:</label>
        <input type="text" name="absen" id="absen" value="{{ $siswa->absen }}" required><br><br>
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" value="{{ $siswa->jurusan }}" required><br><br>
        <button type="submit">Update</button>
    </form>
    </div>

</body>

</html>