@extends('layouts.app')

@section('content')
  <h1>Home</h1>
  <p>Presentation de la page home</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appends the the section sidebar for Home</p>
@endsection
