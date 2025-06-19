@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Detail Buku</h4>
                <span class="badge bg-{{ $book->available ? 'success' : 'danger' }} fs-6">
                    {{ $book->available ? 'Tersedia' : 'Dipinjam' }}
                </span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <strong>Judul:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $book->title }}
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-md-4">
                        <strong>Penulis:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $book->author }}
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-md-4">
                        <strong>Penerbit:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $book->publisher }}
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-md-4">
                        <strong>Tahun Terbit:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $book->year_published }}
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-md-4">
                        <strong>Ditambahkan:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $book->created_at->format('d M Y H:i') }}
                    </div>
                </div>
                
                @if($book->updated_at != $book->created_at)
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <strong>Terakhir Update:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $book->updated_at->format('d M Y H:i') }}
                    </div>
                </div>
                @endif

                <div class="mt-4 d-flex justify-content-between">
                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
                    <div>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection