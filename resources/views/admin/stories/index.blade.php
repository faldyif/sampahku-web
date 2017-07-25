@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

<div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="header">
                      <h4 class="title">Data Story</h4>
                      <p class="category">Informasi Data Story</p>
                  </div>
                  <div class="content table-responsive table-full-width">
                      <table class="table table-hover table-striped">
                          <thead>
			                    <th>ID</th>
                        	<th>Photo Path</th>
                        	<th>ID User</th>
                        	<th>Latitude</th>
                        	<th>Longitude</th>
                        	<th>Akurasi</th>
                        	<th>Verifikasi</th>
                          <!-- <th>Tipe User</th> -->
                          <th>Action</th>
                        </thead>
                        <tbody>
                          @foreach ($story as $key)


                            <tr>
                            	<td>{{ $key->id }}</td>
                            	<td>{{ $key->photo_path }}</td>
                            	<td>{{ $key->user_id }}</td>
                            	<td>{{ $key->latitude }}</td>
                            	<td>{{ $key->longitude }}</td>
                            	<td>{{ $key->accuracy }}</td>
                            	<td>{{ $key->verified }}</td>
                              <!-- <td>{{ $key->type_user }}</td> -->
                              <td>

                                  <a href="{{url('admin/user')}}/{{ $key->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                   <!--  -->
                                   <a href="{{url('admin/user')}}/{{ $key->id}}/destroy" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>

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

@endsection
