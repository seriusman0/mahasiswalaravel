@extends('layout/main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">Form Tambah Data Mahasiswa</h1>
            <form method="post" action="/students">
                @csrf @method('post')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        Username Tidak Boleh Kosong
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control  @error('nim') is-invalid @enderror" id="nim" placeholder="nim" name="nim" value="{{old('nim')}}">
                    @error('nim')
                    <div class="invalid-feedback">
                        NIM Tidak Boleh Kosong
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="email" name="email" value="{{old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                        Username Tidak Boleh Kosong
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusam">Jurusan</label>
                    <input type="text" class="form-control" id="jurusam" placeholder="jurusan" name="jurusan" value="{{old('jurusan')}}">
                    @error('jurusan')
                    <div class="invalid-feedback">
                        Jurusan Tidak Boleh Kosong
                    </div>
                    @enderror
                </div>
                <button type='submit' class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
