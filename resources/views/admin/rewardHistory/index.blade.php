@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data User</h4>
                                <p class="category">Informasi akun user</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
									<!--
									id
									user_id
									cupon_code
									point_spent
									timestamps
									-->
                                      <th>ID</th>
                                    	<th>User ID</th>
                                    	<th>Cupon Code</th>
                                    	<th>Point Spent</th>
                                      <!-- <th>Tipe User</th> -->
                                      <th>Action</th>
                                    </thead>
                                    <tbody>
                                      @foreach ($reward_history as $key)


                                        <tr>
                                        	<td>{{ $key->id }}</td>
                                        	<td>{{ $key->user_id }}</td>
                                        	<td>{{ $key->cupon_code }}</td>
                                        	<td>{{ $key->point_spent }}</td>
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
