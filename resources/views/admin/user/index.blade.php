<?php
	$users = \App\User::whereIn('role_id', [0,1]);
	?>

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
                                      <th>ID</th>
                                    	<th>Email</th>
                                    	<th>Username</th>
                                    	<th>Point</th>
                                      <!-- <th>Tipe User</th> -->
                                      <th>Action</th>
                                    </thead>
                                    <tbody>
                                      @foreach ($user as $key)
                                      <tr>
                                        	<td>{{ $key->id }}</td>
                                        	<td>{{ $key->email }}</td>
                                        	<td>{{ $key->name }}</td>
                                        	<td>{{ $key->point }}</td>
                                          <!-- <td>{{ $key->type_user }}</td> -->
                                          <td>

                                              <a href="{{url('admin/user')}}/{{ $key->id}}/edit" class="btn btn-default">Edit User</a>
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
