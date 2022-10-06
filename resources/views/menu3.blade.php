@extends('dashboard')
@section('content')


<h3>Data Anggota</h3>
 
<a href="#"> + Tambah Buku Baru</a>

<br/>
<br/>

<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Tanggal Registrasi</th>
        <th>Opsi</th>
    </tr>
    @foreach($anggota as $a)
    <tr>
        <td>{{ $a->id }}</td>
        <td>{{ $a->nama }}</td>
        <td>{{ $a->tgl_reg }}</td>
        <td>
            <a href="">Edit</a>
            |
            <a href="">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>


    
@endsection
