@extends('layouts.admin')

@section('title', 'Admin')

@section('content')


<div class="col-md-10">
    <div class="card card-user">
        <div class="image">       
            <img src="{{ url('img/bg-banner.jpg') }}" alt="...}}"/>
        </div>
        <div class="content">
            <div class="author">
                 <img class="avatar border-gray" src="{{ url('img/abdur.png') }}">
                    
                    <h4 class="title">{{ $user->name }}<br />
                        <small>{{ $user->email }}</small>
                    </h4>
                    <h5 class="title">Point : {{ $user->point }}<br />
                    </h5>
                    <hr>
                
                </div>
                <div class="header">
                    <h5 class="category">Tempat sampah yang ditambahkan {{ $user->name }}</h5>
                </div>
                    <div class="content table-responsive table-full-width">

                        <table class="table table-hover table-striped">
                             
                            <thead>
                                <th>ID</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Verifikasi</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Akurasi</th>
                            </thead>
                            <tbody>

                              @foreach ($trash as $key)

                              <tr>
                                    <td>{{ $key->id }}</td>
                                    <td>{{ $key->description }}</td>
                                    <td>{{ $key->photo_path }}</td>
                                    <td>{{ $key->verified }}</td>
                                    <td>{{ $key->latitude }}</td>
                                    <td>{{ $key->longitude }}</td>
                                    <td>{{ $key->accuracy}}</td>
                                    
                                </tr>
                              @endforeach
                            </tbody>
                        </table>

                    </div>
                    <hr>

                <!-- story user -->

                <div class="header">
                    <h5 class="category">Story {{ $user->name }}</h5>
                </div>
                    <div class="content table-responsive table-full-width">
                      <table class="table table-hover table-striped">
                          <thead>
                            <th>ID</th>
                            <th>Photo Path</th>
                            <th>ID User</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Akurasi</th>
                            <th>Verifikasi</th>
                          
                        </thead>
                        <tbody>
                          @foreach ($story as $s)
                            <tr>
                                <td>{{ $s->id }}</td>
                                <td>{{ $s->photo_path }}</td>
                                <td>{{ $s->user_id }}</td>
                                <td>{{ $s->latitude }}</td>
                                <td>{{ $s->longitude }}</td>
                                <td>{{ $s->accuracy }}</td>
                                <td>{{ $s->verified }}</td>
                             
                            </tr>
                          @endforeach
                        </tbody>
                    </table>

                </div>
                <hr>

                <!-- end story user -->

                <!-- pont history user -->
                 <div class="header">
                    <h5 class="category">Point History {{ $user->name }}</h5>
                </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Point</th>
                                <th>Tipe Relasi</th>
                                <th>ID relasi</th>                      
                              
                            </thead>
                            <tbody>
                              @foreach ($pointHistory as $key)
                                <tr>
                                    <td>{{ $key->id }}</td>
                                    <td>{{ $key->point }}</td>
                                    <td>{{ $key->related_type }}</td>
                                    <td>{{ $key->related_id }}</td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                <hr>
                <!-- end point history -->

                <!-- True Report user -->
                 <div class="header">
                    <h5 class="category">True Report {{ $user->name }}</h5>
                </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Content</th>
                                <th>Trash ID</th>
                                <th>Photo Path</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Accuracy</th>
                                <th>Approved</th>
                            </thead>
                            <tbody>

                              @foreach ($userTrueReport as $key)

                            <tr>
                                <td>{{ $key->id }}</td>
                                <td>{{ $key->content }}</td>
                                <td>{{ $key->trash_id }}</td>
                                <td>{{ $k3y->photo_path }}</td>
                                <td>{{ $key->latitude }}</td>
                                <td>{{ $key->longitude }}</td>
                                <td>{{ $key->accuracy}}</td>
                                <td>{{ $key->approved}}</td>
                                
                           </tr>
                              @endforeach
                            </tbody>
                        </table>

                    </div>
                <hr>
                <!-- end True Report -->

                 <!-- False Report user -->
                 <div class="header">
                    <h5 class="category">False Report{{ $user->name }}</h5>
                </div>
                    <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                            <th>ID</th>
                                            <th>Content</th>
                                            <th>Trash ID</th>
                                            <th>Photo Path</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Accuracy</th>
                                            <th>Approved</th>
                                     
                                    </thead>
                                    <tbody>

                                      @foreach ($userFalseReport as $key)

                                      <tr>
                                            <td>{{ $key->id }}</td>
                                            <td>{{ $key->content }}</td>
                                            <td>{{ $key->trash_id }}</td>
                                            <td>{{ $key->photo_path }}</td>
                                            <td>{{ $key->latitude }}</td>
                                            <td>{{ $key->longitude }}</td>
                                            <td>{{ $key->accuracy}}</td>
                                            <td>{{ $key->approved}}</td>
                                          
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>

                            </div>
                <hr>
                <!-- end False Report -->

                <!--Reward History user -->
                 <div class="header">
                    <h5 class="category">Reward History {{ $user->name }}</h5>
                </div>
                    <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                            <th>ID</th>
                            <th>ID Reward</th>
                            <th>Kode Kupon</th>
                            <th>Nilai Poin</th>
                            
                          </thead>
                          <tbody>
                            @foreach ($rewardHistory as $key)
                            <tr>
                                <td>{{ $key->id }}</td>                              
                                <td>{{ $key->reward_id }}</td>
                                <td>{{ $key->cupon_code }}</td>
                                <td>{{ $key->point_spent }}</td>
                              
                            </tr>
                            @endforeach
                          </tbody>
                                </table>

                            </div>
                <hr>
                <!-- end Reward History-->

                


                 
              
          </div>
        <hr>
       
    </div>
</div>

@endsection
