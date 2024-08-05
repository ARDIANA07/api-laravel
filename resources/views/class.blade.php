@extends('layout.master')

@section('title', 'Page Class')

@section('content')
    <h1>ini halaman Class</h1>

    <h3>Class List</h3>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $class)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $class->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
