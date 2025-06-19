<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f3f4f6; color: #333; }
        .container { max-width: 1000px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1, h2 { color: #1f2937; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #e5e7eb; color: #374151; }
        .btn { padding: 8px 12px; border-radius: 4px; text-decoration: none; color: #fff; }
        .btn-primary { background-color: #3b82f6; }
        .btn-info { background-color: #6366f1; }
        .btn-warning { background-color: #f59e0b; }
        .btn-danger { background-color: #ef4444; }
        .alert-success { background-color: #d1fae5; color: #065f46; border: 1px solid #a7f3d0; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
        .flex-container { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;}
        .action-btns { display: flex; gap: 8px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="flex-container">
            <h1>Daftar Pengguna</h1>
            <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah Pengguna Baru</a>
        </div>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(count($users) > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Nama Lengkap</th>
                        <th>Gender</th>
                        <th>Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->phone ?? '-' }}</td>
                            <td class="action-btns">
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Detail</a>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada pengguna yang terdaftar.</p>
        @endif
    </div>
</body>
</html>