<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <div class="container">
        <h1>Detail Siswa</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{ $siswa['foto'] }}" class="card-img-top" alt="{{ $siswa['nama'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $siswa['nama'] }}</h5>
                <p class="card-text"><strong>NIS:</strong> {{ $siswa['nis'] }}</p>
                <p class="card-text"><strong>Alamat:</strong> {{ $siswa['alamat'] }}</p>
                <p class="card-text"><strong>Tanggal Lahir:</strong> {{ $siswa['tanggal_lahir'] }}</p>
                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
