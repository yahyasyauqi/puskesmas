@extends('main')
@section('content')
    

    <div class="container">
        <h1>Daftar Dokter</h1>
        <br>
        <a href="/dokter/create" class="btn btn-primary">+ Tambah Dokter</a>
        <hr>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Spesialis</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $iteration = 1 @endphp
                @foreach ($dokters as $item)
                <tr>
                    <td>{{ $iteration++ }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['spesialis'] }}</td>
                    <td>{{ $item['telp'] }}</td>
                    <td>
                        <a href="/dokter/edit/{{$item->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/dokter" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <input type="hidden" value="{{$item['id']}}" name='dokter_id'>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                    @endforeach
            </tbody>
        </table>
    </div>
 @endsection