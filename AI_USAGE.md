Alat: Claude (claude.ai)

| No | Yang diminta | Yang saya ambil/ubah |
|----|--------------|----------------------|
| 1 | Langkah-Langkah | Urutan: migration, model, route, controller, view, navbar |
| 2 | Letak menu Penulis | Ditambah di components/navbar.blade.php |
| 3 | Error Undefined variable $daftarPenulis | Nama variabel disamakan di controller, compact(), dan view |
| 4 | Error SQL 1364 | View create/edit/index saya ganti dari name/city menjadi nama/negara |
| 5 | Validasi penulis | required, max:100, unique, Rule::unique()->ignore($id), pesan Indonesia |
| 6 | Migration penulis_id di books | foreignId nullable constrained, tanpa nullOnDelete |
| 7 | Relasi, dropdown, validasi di BookController | Ditambah daftarPenulis dan aturan exists:penulis,id |
| 8 | Error hapus penulis (foreign key 1451) | destroy() memakai try/catch QueryException dan pesan error |
| 9 | Tampil penulis di kartu katalog | Blok @if ($buku->penulis) di bawah author_name |