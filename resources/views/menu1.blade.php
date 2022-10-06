@extends('dashboard')
@section('content')


<h3>Data Buku</h3>
 
<a href="/menu1create"> + Tambah Buku Baru</a>

<br/>
<br/>

<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Opsi</th>
    </tr>
    @foreach($buku as $b)
    <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->judul }}</td>
        <td>{{ $b->pengarang }}</td>
        <td>{{ $b->penerbit }}</td>
        <td>
            <a href="">Edit</a>
            |
            <a href="">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>


    
@endsection
