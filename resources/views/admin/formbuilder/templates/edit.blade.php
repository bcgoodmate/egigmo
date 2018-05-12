@extends('layouts.admin')

@section('content')
    @include('admin.formbuilder.templates.partials.content', ['action' => "edit", 'form' => $form])
@endsection