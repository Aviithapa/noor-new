@extends('admin.layout.app')

@section('content')

   @include('admin.pages.cms.team.form', ['model' => $team])

@endsection