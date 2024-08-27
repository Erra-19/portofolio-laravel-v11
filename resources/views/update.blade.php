<x-layout title="Update Project">
    <form action="/update/{{ $project->id }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $project->id }}">
        <div class="mb-3">
            <label for="merk" class="form-label">judul</label>
            <input type="text" class="form-control @error('merk') is-invalid @enderror" placeholder="Masukan Judul" name="judul" value="{{ $project->judul }}">
        </div>
        <div class="mb-3">
            <label for="tipe" class="form-label">isi</label>
            <input type="text" class="form-control @error('tipe') is-invalid @enderror" placeholder="Masukan Isi" name="isi" value="{{ $project->isi }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>