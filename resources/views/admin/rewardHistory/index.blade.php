@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

<div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="header">
                      <h4 class="title">Data Reward History</h4>
                      <p class="category">Informasi riwayat reward</p>
                  </div>
                  <div class="content table-responsive table-full-width">
                      <table class="table table-hover table-striped">
                          <thead>
                            <th>ID</th>
                          	<th>ID User</th>
                          	<th>ID Reward</th>
                          	<th>Kode Kupon</th>
                            <th>Nilai Poin</th>
                            <!-- <th>Tipe User</th> -->
                            <th>Action</th>
                          </thead>
                          <tbody>
                            @foreach ($rewardHistory as $key)
                            <tr>
                            	<td>{{ $key->id }}</td>
                            	<td>{{ $key->user_id }}</td>
                              <td>{{ $key->reward_id }}</td>
                            	<td>{{ $key->cupon_code }}</td>
                            	<td>{{ $key->point_spent }}</td>
                              <!-- <td>{{ $key->type_user }}</td> -->
                              <td>
                                <a href="{{url('admin/user/destroy')}}/{{ $key->id}}" class="btn btn-default">Hapus</a>
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
