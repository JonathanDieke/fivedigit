@extends('layouts.guest')

@section('content')

@include('form', ["title" => "Demande de document", "route" => "requested"])

@endsection
