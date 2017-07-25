<?php
	$users = \App\User::whereIn('role_id', [0]);
	
?>

@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
<div id="page-wrapper">
	 @if(Auth::user()->id == 0)
                         
  <p>  Hai {{ Auth::user()->name }} </p>
  	@else
  		<p>
  			Selamat Datang
  		</p>
  	@endif

</div>
@endsection
