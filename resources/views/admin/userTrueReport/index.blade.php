
@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Laporan Tempat Sampah</h4>
                                <p class="category">Informasi Data Laporan Kebenaran Tempat sampah</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th>ID</th>
                                    	<th>Content</th>
                                    	<th>User ID</th>
                                    	<th>Trash ID</th>
                                      <th>Latitude</th>
                                      <th>Longitude</th>
                                      <th>Accuracy</th>
                                      <th>Approved</th>
                                      <!-- <th>Tipe User</th> -->
                                      <th>Action</th>
                                    </thead>
                                    <tbody>

                                      @foreach ($userTrueReport as $key)

                                      <tr>
                                        	<td>{{ $key->id }}</td>
                                        	<td>{{ $key->content }}</td>
                                        	<td>{{ $key->user_id }}</td>
                                        	<td>{{ $key->trash_id }}</td>
                                          <td>{{ $key->latitude }}</td>
                                          <td>{{ $key->longitude }}</td>
                                          <td>{{ $key->accuracy}}</td>
                                          <td>{{ $key->approved}}</td>
                                          <!-- <td>{{ $key->type_user }}</td> -->
                                          <td>

                                               <!--  -->
                                               <a href="{{url('admin/userTrueReport/destroy')}}/{{ $key->id}}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>


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
