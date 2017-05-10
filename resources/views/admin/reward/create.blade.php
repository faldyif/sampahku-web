@extends('layouts.admin')

@section('title', 'Admin')

@section('content')


<div class="content-db">
		<div class="row">
			<section class="col-md-12 pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<div class="div-content-db">
						{!! Form::open(array('route' => 'reward.store', 'enctype' => 'multipart/form-data')) !!}
							<h3 class="nomag">Tambah Data Reward</h3>
							<div class="row mg-t-20">
								<div class="col-md-8">
									<input type="text" name="name" id="title" placeholder="Masukkan nama reward" class="form-control">
								</div>
                <div class="col-md-8">
									<textarea type="text" name="description" id="description" placeholder="Masukkan deskripsi" class="form-control"></textarea>
								</div>
                <div class="col-md-8">
									<input type="text" name="title" id="title" placeholder="Judul Reward" class="form-control">
								</div>
                <div class="col-md-8">
									<input type="integer" name="stock" id="stock" placeholder="Jumlah Stok" class="form-control">
								</div>
                <div class="col-md-8">
									<input type="text" name="photo_path" id="photo_path" placeholder="Path Foto" class="form-control">
								</div>
                <div class="col-md-8">
                  <input type="integer" name="available" id="available" placeholder="Tersedia" class="form-control">
                </div>

								<div class="col-md-12">
		                            <label>
		                            	<input type="submit" value="Publish" name="" class="btn btn-sm btn-info">
		                            </label>
								</div>
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</section>
		</div>
	</div>
@endsection
