
@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tempat sampah</h4>
                                <p class="category">Informasi Data Tempat Sampah</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th>ID</th>
                                    	<th>Deskripsi</th>
                                    	<th>Foto</th>
                                    	<th>Verifikasi</th>
                                      <th>ID User</th>
                                      <th>ID Type Tempat Sampah</th>
                                      <th>Latitude</th>
                                      <th>Longitude</th>
                                      <th>Akurasi</th>
                                      <!-- <th>Tipe User</th> -->
                                      <th>Action</th>
                                    </thead>
                                    <tbody>

                                      @foreach ($trash as $key)

                                      <tr>
                                        	<td>{{ $key->id }}</td>
                                        	<td>{{ $key->description }}</td>
                                        	<td>{{ $key->photo_path }}</td>
                                        	<td>{{ $key->verified }}</td>
                                          <td>{{ $key->user_id }}</td>
                                          <td>{{ $key->trash_type_id }}</td>
                                          <td>{{ $key->latitude }}</td>
                                          <td>{{ $key->longitude }}</td>
                                          <td>{{ $key->accuracy}}</td>
                                          <!-- <td>{{ $key->type_user }}</td> -->
                                          <td>

                                              <a href="{{url('admin/trash')}}/{{ $key->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                               <!--  -->
                                               <a href="{{url('admin/trash/destroy')}}/{{ $key->id}}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>
                                          

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
