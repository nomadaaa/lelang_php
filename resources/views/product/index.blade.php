@extends('adminlte::page')

@section('title', 'Product')
    
@section('content_header')
    <h3>Product</h3>
@endsection

@section('content')
<main class="main">
    <ul class="breadcrumb">
        <li class="breadcrumb-item">Preview</li>
        <li class="breadcrumb-item active">Product</li>
		</ul>

		@if (session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
		@endif
		
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <div class="card-title">Product</div>
                        </div>
                        <div class="card-body">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>Category</td>
                                <td>Stok</td>
                                <td>
																	<a href=" {{route('product.create')}} " class="btn btn-primary btn-sm">Tambah Data</a>
																</td>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($product as $row)
                                <tr>
                                  <td> {{$a++}} </td>
                                  <td> {{$row->nama}} </td>
                                  <td> {{$row->category->nama}} </td>
                                  <td> {{$row->stok}} </td> 
                                  <td>
                                    <a href=" {{route('product.edit', $row->id)}} " class="btn btn-success">Edit</a>
                                    <a href=" {{route('product.destroy', $row->id)}} " class="btn btn-danger">Edit</a>
                                  </td>
                                </tr>
															@endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection