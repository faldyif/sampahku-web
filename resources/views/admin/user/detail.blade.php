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
                 <a href="#">
               <img class="avatar border-gray" src="{{ url('img/abdur.png') }}">
<!-- $user = User::find($id); -->
                  @foreach($user as $key)
                  <h4 class="title">{{ $key->name }}<br />
                     <small>{{ $key->email }}</small>
                  </h4>
                </a>
            </div>
            <p class="description text-center"> Poin : {{ Auth::user()->point }} <br>
                                History Reward <br>
                                History report
            </p>
            @endforeach

           <!--  @foreach($booking as $key)  
                 <tr>
                   <td>{{ $key->id}}</td>
                   <td>{{ App\Schedule::find($key->schedule_id)->time}}</td>
                   <td>{{ App\Schedule::find($key->schedule_id)->name}}</td>
                   <td>{{ App\Schedule::find($key->schedule_id)->description}}</td>
                   <td><a href="#" type="reset" class="btn btn-danger waves-effect waves-light">Batal</td>
                 </tr>
             @endforeach -->
        </div>
        <hr>
        <div class="text-center">
           
        </div>
    </div>
</div>

@endsection
