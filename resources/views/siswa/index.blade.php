<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            display: flex;
            width: 100%;
            height: 100vh;
            justify-content: center;
        }

        .hapus {
            padding: 8px 10px;
            background-color: red;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        th,
        td {
            padding: 10px 60px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
        }

        .tambah {
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 10px;
            display: inline-block;
        }

        .tombol-edit {
            padding: 8px 10px;
            background-color: green;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            border: none;
        }

        .actions {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
        }

        th, td {
            border: 1px solid #ddd;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div>
        <h1>Daftar Siswa</h1>
        <a class="tambah" href="{{ route('siswa.create') }}">Tambah Siswa</a>

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Absen</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                <tr>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->kelas }}</td>
                    <td>{{ $s->absen }}</td>
                    <td>{{ $s->jurusan }}</td>
                    <td class="actions">
                        <a class="tombol-edit" href="{{ route('siswa.edit', $s->id) }}">Edit</a>
                        <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.hapus');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const form = this.closest('.delete-form');

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data yang dihapus tidak dapat dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                            Swal.fire({
                                title: "Data berhasil dihapus!",
                                icon: "success",
                                draggable: true
                            });
                        }
                    });
                });
            });
        });
    </script>

</body>

</html>
