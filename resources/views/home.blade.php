@extends('layout.master')
@section('title', 'Page Home')

@section('content')
    <h1>Ini halaman home</h1>
    <h2>Selamat datang {{ $name }}</h2>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Buah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buah as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data }}</td>
                </tr>
        </tbody>
        @endforeach
    </table>
@endsection
