@extends('admin.layout.appadmin')
@section('content')

<h1>Selamat datang di Kategori Produk</h1>
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
        <a class="btn btn-success" href="index.php?hal=table_produk/form_produk">Create Produk</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @php $no = 1; @endphp
                @foreach($kategori_produk as $p)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$p->nama}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('kategori/view/'.$p->id)}}">View</a>
                        <a class="btn btn-primary" href="{{url('kategori/edit/'.$p->id)}}">Edit</a>
                        <a class="btn btn-primary" href="{{url('kategori/edit/'.$p->id)}}" onclick="confirmDelete(event)" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection