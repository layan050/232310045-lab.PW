@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Daftar Buku Perpustakaan</h2>
    <a href="{{ route('books.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Buku
    </a>
</div>

<div class="card">
    <div class="card-body">
        @if($books->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{ $loop->iteration + ($books->currentPage() - 1) * $books->perPage() }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->year_published }}</td>
                            <td>
                                <span class="badge bg-{{ $book->available ? 'success' : 'danger' }}">
                                    {{ $book->available ? 'Tersedia' : 'Dipinjam' }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('books.show', $book) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center">
                {{ $books->links() }}
            </div>
        @else
            <div class="text-center py-4">
                <h5>Belum ada data buku</h5>
                <p class="text-muted">Silakan tambah buku pertama Anda</p>
                <a href="{{ route('books.create') }}" class="btn btn-primary">Tambah Buku</a>
            </div>
        @endif
    </div>
</div>
@endsection