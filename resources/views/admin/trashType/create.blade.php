@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

<div class="content-db">
		<div class="row">
			<section class="col-md-6 pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<div class="div-content-db">
						{!! Form::open(array('route' => 'trashType.store', 'enctype' => 'multipart/form-data')) !!}

							<div class="form-group">
								<label class="control-label">Jenis Tempat Sampah : </label>
								<input type="text" name="trash_type" placeholder="Masukkan jenis tempat sampah" class="form-control">
							</div>
							<div class="form-group">
								<label for="icon_path" class="control-label">Image File :</label>
								<input type="file" id="photo" name="icon" class="form-control" accept=".jpg, .jpeg, .png, .gif" />
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-info" value="Upload" />
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
