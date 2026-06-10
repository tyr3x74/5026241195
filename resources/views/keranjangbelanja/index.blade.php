@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')
    <br />
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @foreach ($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>{{ number_format($k->Harga) }}</td>
                <td>{{ number_format($k->Jumlah * $k->Harga) }}</td>
                <td>
                    <a href="/keranjangbelanja/tambah" class="btn btn-success">Beli</a>
                    <a href="/keranjangbelanja/batal/{{ $k->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
