<!DOCTYPE html>
<html>
<head>
    <title>Biodata Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3>Data Diri</h3>
            </div>
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $nama }}</p>
                <p><strong>Alamat:</strong> {{ $alamat }}</p>
                <p><strong>Email:</strong> {{ $email }}</p>
                <p><strong>Deskripsi:</strong> {{ $deskripsi }}</p>
            </div>
        </div>
    </div>
</body>
</html>
