@extends('layouts.admin')

@section('title', 'Admin')

@section('content')


<div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="header">
                      <h4 class="title">Data Reward</h4>
                      <p class="category">Informasi Reward User</p>
                  </div>
                  <div class="content table-responsive table-full-width">
                      <table class="table table-hover table-striped">
                          <thead>
				<!--
				id
				name
				description
				title
				stock
				photo_path
				available
				timestamps
				-->
                            <th>ID</th>
                          	<th>Name</th>
                          	<th>Description</th>
                          	<th>Title</th>
                          	<th>Stock</th>
                          	<th>Photo Path</th>
                          	<th>Available</th>
                            <!-- <th>Tipe User</th> -->
                            <th>Action</th>
                          </thead>
                          <tbody>
                            @foreach ($reward as $key)
                              <tr>
                              	<td>{{ $key->id }}</td>
                              	<td>{{ $key->name }}</td>
                              	<td>{{ $key->description }}</td>
                              	<td>{{ $key->title }}</td>
                              	<td>{{ $key->stock }}</td>
                              	<td>{{ $key->photo_path }}</td>
                              	<td>{{ $key->available }}</td>
                                <!-- <td>{{ $key->type_user }}</td> -->
                                <td>

                                    <a href="{{url('admin/reward')}}/{{ $key->id}}/edit" class="btn btn-default">Edit</a>
                                     <!--  -->
                                     <a href="{{url('admin/reward')}}/{{ $key->id}}/destroy" class="btn btn-default">Hapus</a>

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
