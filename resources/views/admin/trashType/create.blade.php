@extends('layouts.admin')

@section('title', 'Admin')

@section('content')


<div class="content-db">
		<div class="row">
			<section class="col-md-12 pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<div class="div-content-db">
						{!! Form::open(array('route' => 'reward.store', 'enctype' => 'multipart/form-data')) !!}
							<h3 class="nomag">Tambah Tipe Tempat Sampah</h3>
							<div class="row mg-t-20">
								<div class="col-md-8">
                  <!-- <label>Tipe Tempat Sampah</label>
                    {{ Form::text('role', null, array('class' => 'form-control')) }} 
                  <select type="integer" name="trash_type" id="trash_type" class="form-control select2">
                    <option value="1">Tempat Sampah Biasa</option>
                    <option value="2">TPA</option>

                  </select>
									<input type="integer" name="trash_type" id="trash_type" placeholder="Masukkan type tempat sampah" class="form-control">
								</div> -->
                <div class="col-md-8">
									<textarea type="text" name="icon_path" id="icon_path" placeholder="Masukkan icon_path" class="form-control"></textarea>
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
			</section>
		</div>
	</div>
@endsection
