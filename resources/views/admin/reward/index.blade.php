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
                    <a href="{{url('admin/reward')}}/create" class="btn btn-success"><i class="fa fa-plus"></i>Tambah</a>
                    <br>
                      <table class="table table-hover table-striped">
                            <th>ID</th>
                          	<th>Nama</th>
                          	<th>Deskripsi</th>
                          	<th>Judul</th>
                          	<th>Stok</th>
                          	<th>Path Foto</th>
                          	<th>Ketersediaan</th>
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
                              	<td><img src="{{ url("storage/reward")}}/{{ $key->photo_path}}" /></td> 
                                <!-- <td>{{ $key->photo_path}}</td> -->
                              	<td>{{ $key->available }}</td>
                                <!-- <td>{{ $key->type_user }}</td> -->
                                <td>
                                    
                                    <a href="{{url('admin/reward')}}/{{ $key->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                     <!--  -->
                                     <a href="{{url('admin/reward/destroy')}}/{{ $key->id}}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>

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
