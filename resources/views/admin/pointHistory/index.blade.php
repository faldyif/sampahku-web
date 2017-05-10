@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Point History</h4>
                                <p class="category">Informasi Riwayat Poin</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th>ID</th>
                                    	<th>Point</th>
                                    	<th>ID User</th>
                                    	<th>Tipe Relasi</th>
                                      <th>ID relasi</th>
                                      <!-- <th>Tipe User</th> -->
                                      <th>Action</th>
                                    </thead>
                                    <tbody>
                                      @foreach ($pointHistory as $key)
                                      <tr>
                                        	<td>{{ $key->id }}</td>
                                        	<td>{{ $key->point }}</td>
                                        	<td>{{ $key->user_id }}</td>
                                        	<td>{{ $key->related_type }}</td>
                                          <td>{{ $key->related_id }}</td>
                                          <td>

                                              <a href="{{url('admin/pointHistory')}}/{{ $key->id}}/edit" class="btn btn-default">Edit User</a>
                                               <!--  -->
                                               <a href="{{url('admin/pointHistory')}}/{{ $key->id}}/destroy" class="btn btn-default">Hapus</a>

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
