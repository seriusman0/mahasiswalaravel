@extends('layout/main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">Form Ubah Data Mahasiswa</h1>
            <form method="post" action="/students/{{$student->id}}">
                @csrf @method('patch')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" name="nama" value="{{$student->nama}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        Username Tidak Boleh Kosong
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control  @error('nim') is-invalid @enderror" id="nim" placeholder="nim" name="nim" value="{{$student->nim}}">
                    @error('nim')
                    <div class="invalid-feedback">
                        NIM Tidak Boleh Kosong
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="email" name="email" value="{{$student->email}}">
                    @error('email')
                    <div class="invalid-feedback">
                        Username Tidak Boleh Kosong
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusam">Jurusan</label>
                    <input type="text" class="form-control" id="jurusam" placeholder="jurusan" name="jurusan" value="{{$student->jurusan}}">
                    @error('jurusan')
                    <div class="invalid-feedback">
                        Jurusan Tidak Boleh Kosong
                    </div>
                    @enderror
                </div>
                <button type='submit' class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
