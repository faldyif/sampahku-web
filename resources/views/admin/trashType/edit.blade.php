@extends('layouts.admin')

@section('title', 'Admin')

@section('content')


<div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-8">
                  <div class="card">
                      <div class="header">
                          <h4 class="title">Edit Tipe Tempat Sampah</h4>
                      </div>
                      <div class="content">
                          {!! Form::model($trashType, array('route' => array('trashType.update', $trashType->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) !!}
                              <div class="row">
                                  <!-- <div class="col-md-5">
                                      <div class="form-group">
                                          <label>Company (disabled)</label>
                                          <input type="text" class="form-control" disabled placeholder="Company" value="Creative Code Inc.">
                                      </div>
                                  </div> -->
                                  <div class="col-md-8">
                                      <div class="form-group">
                                          <!-- <label>Tipe Tempat Sampah</label>
                                          <label>Role</label>
                                            <!-- {{ Form::text('role', null, array('class' => 'form-control')) }} -->
                                            <label>Tipe Tempat Sampah</label>
                                              <!-- {{ Form::text('role', null, array('class' => 'form-control')) }} -->
                                            <select name="trash_type" class="form-control select2">

                                              <option value="1">Tempat Sampah Biasa</option>
                                              <option value="2">TPA</option>

                                            </select>


                                        <!--  {{ Form::text('trash_type', null, array('class' => 'form-control')) }} -->
                                      </div>
                                  </div>
                                <div>
                                  <div class="col-md-8">
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Icon Path</label>
                                          {{ Form::text('icon_path', null, array('class' => 'form-control')) }}
                                      </div>
                                  </div>
                              </div>
                            </div>



                              <!-- <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>Address</label>
                                          <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>City</label>
                                          <input type="text" class="form-control" placeholder="City" value="Mike">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Country</label>
                                          <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Postal Code</label>
                                          <input type="number" class="form-control" placeholder="ZIP Code">
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>About Me</label>
                                          <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                      </div>
                                  </div>
                              </div> -->

                              <button type="submit" class="btn btn-info btn-fill pull-right">Update Trash Type</button>
                              <div class="clearfix"></div>
                          {!! Form::close() !!}
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card card">
                      <div class="image">
                          <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                      </div>

                      <div class="text-center">
                          <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                          <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                          <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>

@endsection
