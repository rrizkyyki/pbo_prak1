@extends('dashboard')
@section('content')


<h3>Data Petugas</h3>
 
<a href="#"> + Tambah Buku Baru</a>

<br/>
<br/>

<table class="table table-striped table-bordered">
    @php
        $list = 1
    @endphp
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Opsi</th>
    </tr>
    @foreach($petugas as $p)
    <tr>
        <td>{{ $list++ }}</td>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nama }}</td>
        <td>
            <a href="">Edit</a>
            |
            <a href="">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>


    
@endsection
