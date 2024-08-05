@extends('layout.master')

@section('title', 'Page Student')

@section('content')
    <h1>ini halaman Student</h1>

    <h3>Student List</h3>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Nis</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dt)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dt->name }}</td>
                    <td>{{ $dt->gender }}</td>
                    <td>{{ $dt->nis }}</td>
                    <td>{{ $dt->class_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
