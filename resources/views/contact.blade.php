@extends('Layout.layouts')

@section('title', 'Contact Page')

@section('content')
    <h1>Contact List</h1>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr bgcolor="#add8e6"> <!-- Warna biru muda menggunakan kode warna #add8e6 -->
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @php
                $contacts = [
                    ['name' => 'Sastria Elvaretta Andhara Putri', 'email' => 'elvarettaputri63@gmail.com', 'role' => 'Murid'],
                    ['name' => 'Dwi', 'email' => 'dwi@gmail.com', 'role' => 'Karyawan'],
                    ['name' => 'Jesiika', 'email' => 'jesiika@gmail.com', 'role' => 'Pimpinan'],
                    ['name' => 'Talitha Dwi', 'email' => 'talita@gmail.com', 'role' => 'Murid'],
                    ['name' => 'Nesya Nur', 'email' => 'nesya@gmail.com', 'role' => 'Murid'],
                    ['name' => 'Aprilya Teguh', 'email' => 'aprilya@gamil.com','role' => 'Pimpinan'],
                    ['name' => 'Budi Hartono', 'email' => 'budi@gamil.com', 'role' => 'Karyawan']
                ];
            @endphp
            @foreach ($contacts as $index => $contact)
            <tr @if($loop->even) bgcolor="#f2f2f2" @endif>
                <td>{{ $index + 1 }}</td>
                <td>{{ $contact['name'] }}</td>
                <td>{{ $contact['email'] }}</td>
                <td>{{ $contact['role'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
