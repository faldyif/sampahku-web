@extends('layouts.admin')

@section('title', 'Admin')

@section('content')


<div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-10">
                  <div class="card">
                      <div class="header">
                          <h4 class="title">Edit User</h4>
                      </div>
                      <div class="content">
                          {!! Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) !!}
                              <div class="row">                                     
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            {{ Form::text('email', null, array('class' => 'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                              
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Point</label>
                                          {{ Form::text('point', null, array('class' => 'form-control')) }}
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Role</label>
                                        <!-- {{ Form::text('role', null, array('class' => 'form-control')) }} -->
                                      <select name="role" class="form-control select2">

                                        <option value="0">Admin</option>
                                        <option value="1">User</option>

                                      </select>
                                  </div>
                              </div>
                            </div>
                            <div class="row">                                     
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            {{ Form::password('password', null, array('class' => 'form-control')) }}
                                        </div>
                                    </div>
                                    
                                </div>
                          </div>
                          
                          <a href="{{ url('admin/user') }}"  class="btn btn-danger btn-fill pull-right">Batal</a>
                          <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                              <div class="clearfix"></div>
                          {!! Form::close() !!}
                      </div>
                  </div>
              </div>
             

          </div>
      </div>
  </div>

@endsection
