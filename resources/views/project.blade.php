<x-layout title="List Project">
    <h1><center>List Project</center></h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">isi</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($project as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->judul }}</td>
                <td>{{ $project->isi }}</td>
                <td>
                    <a href="/update/{{ $project->id }}" class="btn btn-primary">Update</a>
                </td>
                <td>
                    <form action="/delete/{{ $project->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <tr>
                <th scope="row"> </th>                
                <td><a href="/tambah" class="btn btn-primary">Daftar Baru</a></td>
            </tr>
        </tbody>
    </table>
</x-layout>
