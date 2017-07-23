@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
<div id="page-wrapper">

  <p>  Hai {{ Auth::user()->name }} </p>
</div>
@endsection
