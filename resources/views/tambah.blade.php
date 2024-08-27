<x-layout title="tambah daftar">
    <form action="/tambah" method="post">
        @csrf
        <div class="mb-3">
            <label for="merk" class="form-label">judul</label>
            <input type="text" class="form-control @error('merk') is-invalid @enderror" placeholder="Masukan Judul" name="judul">
        </div>
        <div class="mb-3">
            <label for="tipe" class="form-label">isi</label>
            <input type="text" class="form-control @error('tipe') is-invalid @enderror" placeholder="Masukan Isi" name="isi">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>