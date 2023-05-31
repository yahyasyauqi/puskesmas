@extends('main')
@section('content')
    
@endsection

<body>
    <div class="container">
        <h1 class="text-center">Tambah Dokter</h1>
        <br>
        <a href="/dokter" class="btn btn-primary">
            < Back</a>
                <hr>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Ada kesalahan input data! <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/dokter" method="post" class="mx-2">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Dokter" value="">
                    </div>

                    <div class="form-group mt-3">
                        <label for="spesialis">Spesialis</label>
                        <select class="form-control" name="spesialis">
                            <option value="saraf">Spesialis saraf</option>
                            <option value="anak">Spesialis anak</option>
                            <option value="bedah">Spesialis bedah</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="telp">Telp</label>
                        <input type="text" class="form-control" name="telp" placeholder="Masukkan No. Telp" value="">
                    </div>

                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat"></textarea>
                    </div>

                    <div class="form-group mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

    </div>
    @endsection