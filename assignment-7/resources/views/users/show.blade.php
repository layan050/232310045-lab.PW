<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna: {{ $user->fullname }}</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f3f4f6; color: #333; }
        .container { max-width: 600px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1, h2 { color: #1f2937; margin-bottom: 20px;}
        .detail-item { margin-bottom: 10px; }
        .detail-item strong { display: block; margin-bottom: 3px; color: #374151; }
        .detail-item p { margin: 0; }
        .btn { padding: 10px 15px; border-radius: 4px; text-decoration: none; color: #fff; border: none; cursor: pointer; }
        .btn-warning { background-color: #f59e0b; }
        .btn-secondary { background-color: #6b7280; margin-left: 10px;}
        .flex-buttons { display: flex; justify-content: flex-start; align-items: center; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detail Pengguna</h2>

        <div class="detail-item">
            <strong>ID:</strong>
            <p>{{ $user->id }}</p>
        </div>
        <div class="detail-item">
            <strong>Email:</strong>
            <p>{{ $user->email }}</p>
        </div>
        <div class="detail-item">
            <strong>Nama Lengkap:</strong>
            <p>{{ $user->fullname }}</p>
        </div>
        <div class="detail-item">
            <strong>Alamat:</strong>
            <p>{{ $user->address }}</p>
        </div>
        <div class="detail-item">
            <strong>Tanggal Lahir:</strong>
            <p>{{ $user->birthdate ? $user->birthdate->format('d M Y') : '-' }}</p>
        </div>
        <div class="detail-item">
            <strong>Jenis Kelamin:</strong>
            <p>{{ $user->gender == 'M' ? 'Laki-laki' : 'Perempuan' }}</p>
        </div>
        <div class="detail-item">
            <strong>Telepon:</strong>
            <p>{{ $user->phone ?? '-' }}</p>
        </div>
        <div class="detail-item">
            <strong>Dibuat Pada:</strong>
            <p>{{ $user->created_at->format('d M Y, H:i') }}</p>
        </div>
        <div class="detail-item">
            <strong>Terakhir Diperbarui:</strong>
            <p>{{ $user->updated_at->format('d M Y, H:i') }}</p>
        </div>

        <div class="flex-buttons">
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
        </div>
    </div>
</body>
</html>