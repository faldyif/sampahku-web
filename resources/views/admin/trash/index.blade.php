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
									description
									photo_path
									user_id
									trash_type_id
									verified
									latitude
									longitude
									accuracy
									timestamps
									-->
                                      <th>ID</th>
                                    	<th>Description</th>
                                    	<th>Photo Path</th>
                                    	<th>User ID</th>
                                    	<th>Trash Type ID</th>
                                    	<th>Verified</th>
                                    	<th>Latitude</th>
                                    	<th>Longitude</th>
                                    	<th>Accuracy</th>
                                    	<th>Timestamps</th>
                                      <!-- <th>Tipe User</th> -->
                                      <th>Action</th>
                                    </thead>
                                    <tbody>
                                      @foreach ($trash as $key)
                                        <tr>
                                        	<td>{{ $key->id }}</td>
                                        	<td>{{ $key->description }}</td>
                                        	<td>{{ $key->photo_path }}</td>
                                        	<td>{{ $key->user_id }}</td>
                                        	<td>{{ $key->trash_type_id }}</td>
                                        	<td>{{ $key->verified }}</td>
                                        	<td>{{ $key->latitude }}</td>
                                        	<td>{{ $key->longitude }}</td>
                                        	<td>{{ $key->accuracy }}</td>
                                        	<td>{{ $key->timestamps }}</td>
                                          <!-- <td>{{ $key->type_user }}</td> -->
                                          <td>

                                              <a href="{{url('admin/user')}}/{{ $key->id}}/edit" class="btn btn-default">Edit</a>
                                               <!--  -->
                                               <a href="{{url('admin/user')}}/{{ $key->id}}/destroy" class="btn btn-default">Hapus</a>

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
