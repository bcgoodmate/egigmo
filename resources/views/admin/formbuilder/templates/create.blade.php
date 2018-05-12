@extends('layouts.admin')

@section('content')
    @include('admin.formbuilder.templates.partials.content', ['action' => "create"])
@endsection


