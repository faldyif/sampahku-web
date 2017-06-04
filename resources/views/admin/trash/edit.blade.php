@extends('layouts.admin')

@section('title', 'Admin')

@section('content')


<div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-10">
                  <div class="card">
                      <div class="header">
                          <h4 class="title">Edit Tempat Sampah</h4>
                      </div>
                      <div class="content">
                          {!! Form::model($trash, array('route' => array('trash.update', $trash->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) !!}

                                  <!-- <div class="col-md-5">
                                      <div class="form-group">
                                          <label>Company (disabled)</label>
                                          <input type="text" class="form-control" disabled placeholder="Company" value="Creative Code Inc.">
                                      </div>
                                  </div> -->
                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Deskripsi</label>
                                          {{ Form::text('description', null, array('class' => 'form-control')) }}
                                      </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Foto</label>
                                          {{ Form::text('photo_path', null, array('class' => 'form-control')) }}
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Verifikasi</label>
                                          {{ Form::text('verified', null, array('class' => 'form-control')) }}
                                      </div>
                                  </div>
                              </div>

                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Latitude</label>
                                          {{ Form::text('latitude', null, array('class' => 'form-control')) }}
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Longitude</label>
                                          {{ Form::text('longitude', null, array('class' => 'form-control')) }}
                                      </div>
                                  </div>
                                  </div>
                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Akurasi</label>
                                          {{ Form::text('accuracy', null, array('class' => 'form-control')) }}
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-info btn-fill pull-center">Update Trash</button>
                  <div class="clearfix"></div>
              {!! Form::close() !!}
                </div>

      </div>
  </div>

@endsection
