<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <div class="container">
        <h1>Daftar Siswa</h1>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $item)
                    <tr>
                        <td><img src="{{ $item['foto'] }}" width="50"></td>
                        <td>{{ $item['nis'] }}</td>
                        <td><a href="{{ route('siswa.show', $item['nis']) }}">{{ $item['nama'] }}</a></td>
                        <td>{{ $item['alamat'] }}</td>
                        <td>{{ $item['tanggal_lahir'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
