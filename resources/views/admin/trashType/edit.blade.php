@extends('layouts.admin')

@section('title', 'Admin')

@section('content')


<div class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-md-10">
				<div class="card">
          <div class="header">
              <h4 class="title">Edit Tempat Sampah</h4>
          </div>
          <div class="content">
						 {!! Form::model($trashType, array('route' => array('trashType.update', $trashType->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) !!}
						 <div class="col-md-8">
							<div class="form-group">
								<label>Jenis Tempat Sampah</label>
                  			{{ Form::text('trash_type', null, array('class' => 'form-control')) }}
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
								<div class="form-group">
									<label for="icon_path" class="control-label">Image File :</label>
									<input type="file" id="photo"  name="icon" class="form-control" accept=".jpg, .jpeg, .png, .gif" />
										<!-- {{ Form::text('icon_path', null, array('class' => 'form-control')) }} -->
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="btn btn-info" value="Upload" />
								</div>
							</div>
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
