@extends('admin.layout.app')

@section('content')

   @include('admin.pages.cms.annual-report.form', ['model' => $annualReport])

@endsection
