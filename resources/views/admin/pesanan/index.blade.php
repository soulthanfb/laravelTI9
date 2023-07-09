@extends('admin.layout.appadmin')
@section('content')

<h1>Selamat datang di Pesanan</h1>
<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more
        information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i> -->
        <a class="btn btn-success" href="index.php?hal=table_produk/form_produk">Create Pesanan</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pemesanan</th>
                    <th>Alamat Pemesanan</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Jumlah Pemesanan</th>
                    <th>Deskripsi</th>
                    <th>Produk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pemesan</th>
                    <th>Alamat Pemesan</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Jumlah Pesanan</th>
                    <th>Deskripsi</th>
                    <th>Produk</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @php $no = 1; @endphp
                @foreach($pesanan as $p)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$p->tanggal}}</td>
                    <td>{{$p->nama_pemesan}}</td>
                    <td>{{$p->alamat_pemesan}}</td>
                    <td>{{$p->no_hp}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->jumlah_pesanan}}</td>
                    <td>{{$p->deskripsi}}</td>
                    <td>{{$p->nama_produk}}</td>
                    <td>
                        <a class="btn btn-primary" href="">View</a>
                        <a class="btn btn-primary" href="">Edit</a>
                        <a class="btn btn-primary" href="">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection