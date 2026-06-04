@extends('template')
@section('judul halaman', 'Data Televisi')
@section('konten')
<p></p>
	<a href="/televisi/tambah" class="btn btn-primary"> + Tambah Televisi Baru</a>

	<br/>
	<br/>
	<form action="/televisi/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Televisi ..">
		<input type="submit" value="Cari" class="btn btn-success">
	</form>
    <p></p>
	<table class="table table-striped table-hover">
		<tr>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($televisi as $p)
		<tr>
			<td>{{ $p->merktelevisi }}</td>
			<td>{{ $p->stocktelevisi }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
				<a href="/televisi/edit/{{ $p->kodetelevisi }}" class="btn btn-warning">Edit</a>
				|
				<a href="/televisi/hapus/{{ $p->kodetelevisi }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $televisi->links() }}
@endsection
