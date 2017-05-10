@extends('layouts.admin')

@section('title', 'Admin')

@section('content')


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Tipe Tempat Sampah</h4>
                                <p class="category">Informasi Tipe Tempat Sampah</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
								                      <th>ID</th>
                                    	<th>Tipe Tempat Sampah</th>
                                    	<th>Icon Path</th>

                                      <!-- <th>Tipe User</th> -->
                                      <th>Action</th>
                                    </thead>
                                    <tbody>
                                      @foreach ($trashType as $key)
                                        <tr>
                                        	<td>{{ $key->id }}</td>
                                        	<td>{{ $key->trash_type }}</td>
                                        	<td>{{ $key->icon_path }}</td>

                                          <!-- <td>{{ $key->type_user }}</td> -->
                                          <td>
                                              <a href="{{url('admin/trashType')}}/create" class="btn btn-default">Tambah</a>
                                              <a href="{{url('admin/trashType')}}/{{ $key->id}}/edit" class="btn btn-default">Edit</a>                                             <!--  -->
                                              <a href="{{url('admin/trashType/destroy')}}/{{ $key->id}}" class="btn btn-default">Hapus</a>

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
