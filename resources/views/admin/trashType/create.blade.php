@extends('layouts.admin')

@section('title', 'Admin')

@section('content')


	<div class="content-db">
		<div class="row">
			<section class="col-md-12 pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<div class="div-content-db">
						{!! Form::open(array('route' => 'trashType.store', 'enctype' => 'multipart/form-data')) !!}
						<h3 class="nomag">Tambah Tipe Tempat Sampah</h3>
						<div class="row">
							<div class="col-md-12">
                				<div class="col-md-12">
									{{ Form::text('trash_type', null, array('class' => 'form-control', 'placeholder' => 'Nama Jenis Tempat Sampah')) }}
								</div>
								<div class="col-md-4">
									<span>Icon Tempat Sampah: </span>
									<label>
										{{ Form::file('icon' ,array('class' => 'form-control')) }}
									</label>
								</div>


								<div class="col-md-12">
		                            <label>
		                            	<input type="submit" value="Tambah" name="" class="btn btn-sm btn-info">
		                            </label>
								</div>
							</div>
						{!! Form::close() !!}
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
@endsection
