{{-- resources/views/buku/show.blade.php (contoh) --}}
<h1>{{ $book['judul'] ?? 'Tidak ditemukan' }}</h1>

@if ($book)
    <p>Penulis: {{ $book['penulis'] }}</p>
@else
    <p>Tidak ada buku dengan id {{ $id }}.</p>
@endif
