@extends('template')
@section('judul halaman', 'Tambah Data Televisi')
@section('konten')
<p></p>
    <a href="/televisi" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Televisi
        </div>

        <div class="card-body">
            <form action="/televisi/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                        <input type="text" name="merk" id="merk" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="number" name="stock" id="stock" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="tersedia" id="tersedia" class="form-check-input" value="Y">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
