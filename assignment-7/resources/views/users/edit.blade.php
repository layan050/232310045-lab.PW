<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna: {{ $user->fullname }}</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f3f4f6; color: #333; }
        .container { max-width: 800px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1, h2 { color: #1f2937; margin-bottom: 20px;}
        form div { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; color: #374151; }
        input[type="text"], input[type="email"], input[type="date"], textarea, select {
            width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 4px; box-sizing: border-box;
        }
        input:focus, textarea:focus, select:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.25); }
        .btn { padding: 10px 15px; border-radius: 4px; text-decoration: none; color: #fff; border: none; cursor: pointer; }
        .btn-success { background-color: #22c55e; }
        .btn-cancel { background-color: #6b7280; margin-left: 10px;}
        .error-message { color: #ef4444; font-size: 0.875em; margin-top: 5px; }
        .alert-danger { background-color: #fee2e2; color: #991b1b; border: 1px solid #fca5a5; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
        .flex-buttons { display: flex; justify-content: flex-end; align-items: center; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Pengguna: {{ $user->fullname }}</h2>

        @if ($errors->any())
            <div class="alert-danger">
                <strong>Oops!</strong> Ada masalah dengan input Anda.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Penting: Memberitahu Laravel ini adalah request UPDATE --}}

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="fullname">Nama Lengkap:</label>
                <input type="text" name="fullname" id="fullname" value="{{ old('fullname', $user->fullname) }}">
                @error('fullname')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="address">Alamat:</label>
                <textarea name="address" id="address" rows="3">{{ old('address', $user->address) }}</textarea>
                @error('address')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="birthdate">Tanggal Lahir:</label>
                <input type="date" name="birthdate" id="birthdate" value="{{ old('birthdate', $user->birthdate ? $user->birthdate->format('Y-m-d') : '') }}">
                @error('birthdate')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="gender">Jenis Kelamin:</label>
                <select name="gender" id="gender">
                    <option value="">Pilih</option>
                    <option value="M" {{ (old('gender', $user->gender) == 'M') ? 'selected' : '' }}>Laki-laki</option>
                    <option value="F" {{ (old('gender', $user->gender) == 'F') ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('gender')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="phone">Telepon:</label>
                <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}">
                @error('phone')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex-buttons">
                <button type="submit" class="btn btn-success">Perbarui Pengguna</button>
                <a href="{{ route('users.index') }}" class="btn btn-cancel">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>