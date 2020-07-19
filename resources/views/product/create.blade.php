@extends('adminlte::page')

@section('title', 'Add || Product')

@section('content')
    <main class="main">
      <ul class="breadcrumb">
				<li class="breadcrumb-item">Preview</li>
				<li class="breadcrumb-item active">Add Product</li>
			</ul>

			<div class="container">
				<div class="animated fadeIn">
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Add Product</div>
								</div>
								<div class="card-body">
									<form action=" {{route('product.store')}} " method="POST" enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="">No Barang</label>
											<input type="text" class="form-control" name="no_product" value="{{old('no_product')}}">
											<p class="text-danger"> {{$errors->first('no_product')}} </p>
										</div>
										<div class="form-group">
											<label for="">Nama Barang</label>
											<input type="text" class="form-control" name="nama" value="{{old('nama')}}">
											<p class="text-danger"> {{$errors->first('nama')}} </p>
										</div>
										<div class="form-group">
											<label for="">Kategori</label>
											<select name="category_id" id="" class="form-control">
												<option value="">-- Pilih Kategori --</option>
												@foreach($category as $row)
												<option value="{{ $row->id  }}" {{ old('nama') == $row->id ? 'selected':'' }}>
													{{$row->nama}} 
												</option>
												@endforeach
											</select>
											<p class="text-danger"> {{$errors->first('no_product')}} </p>
										</div>
										<div class="form-group">
											<label for="">Stok</label>
											<input type="number" class="form-control" name="stok" value="{{old('stok')}}>
											<p class="text-danger"> {{$errors->first('stok')}} </p>
										</div>
										<div class="form-group">
											<label for="">Harga</label>
											<input type="number" class="form-control" name="harga" value="{{old('harga')}}">
											<p class="text-danger"> {{$errors->first('harga')}} </p>
										</div>
										<div class="form-group">
											<label for="">Gambar</label>
											<input type="file" class="form-control" name="gambar">
											<p class="text-danger"> {{$errors->first('gambar')}} </p>
										</div>
										<div class="form-group">
											<button class="btn btn-primary" type="submit">Simpan</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Add Category</div>
								</div>
								<div class="card-body">
									<form action=" {{route('category.store')}} " method="POST">
										@csrf
										<div class="form-group">
											<label for="">Nama Kategori</label>
											<input type="text" class="form-control" name="nama">
											<p class="text-danger"> {{$errors->first('nama')}} </p>
										</div>
										<div class="form-group">
											<button class="btn btn-primary" type="submit">Simpan</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    </main>
@endsection