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
                      <p class="category">Informasi akun story</p>
                  </div>
                  <div class="content table-responsive table-full-width">
                      <table class="table table-hover table-striped">
                          <thead>
				<!--
				id
				photo_path
				user_id
				latitude
				longitude
				accuracy
				verified
				available
				timestamps
  		-->
                          <th>ID</th>
                        	<th>Photo Path</th>
                        	<th>User ID</th>
                        	<th>Latitude</th>
                        	<th>Longitude</th>
                        	<th>Accuracy</th>
                        	<th>Verified</th>
                        	<th>Available</th>
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
                            	<td>{{ $key->available }}</td>
                              <!-- <td>{{ $key->type_user }}</td> -->
                              <td>

                                  
                                   <!--  -->
                                   <a href="{{url('admin/story')}}/{{ $key->id}}/destroy" class="btn btn-default">Hapus</a>

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
