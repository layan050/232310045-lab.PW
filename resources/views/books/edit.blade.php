@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Edit Buku: {{ $book->title }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('books.update', $book) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Buku *</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title', $book->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">Penulis *</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" 
                               id="author" name="author" value="{{ old('author', $book->author) }}" required>
                        @error('author')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="publisher" class="form-label">Penerbit *</label>
                        <input type="text" class="form-control @error('publisher') is-invalid @enderror" 
                               id="publisher" name="publisher" value="{{ old('publisher', $book->publisher) }}" required>
                        @error('publisher')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="year_published" class="form-label">Tahun Terbit *</label>
                        <input type="number" class="form-control @error('year_published') is-invalid @enderror" 
                               id="year_published" name="year_published" 
                               value="{{ old('year_published', $book->year_published) }}" 
                               min="1900" max="{{ date('Y') }}" required>
                        @error('year_published')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="available" name="available" 
                               {{ old('available', $book->available) ? 'checked' : '' }}>
                        <label class="form-check-label" for="available">
                            Buku Tersedia
                        </label>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update Buku</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection