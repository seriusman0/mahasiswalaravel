@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Mahasiswa</h1>
            <table class="table">
                <thead class="thdead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($mahasiswa as $result)
                    <tr>

                        <th scope="row">{{ $loop->iteration}} </th>
                        <td>{{ $result->nama}}</td>
                        <td>{{ $result->nim}}</td>
                        <td>{{ $result->email}}</td>
                        <td>{{ $result->jurusan}}</td>
                        <td>
                            <a href="" class="badge badge-success bg-success">edit</a>
                            <a href="" class="badge badge-danger bg-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
