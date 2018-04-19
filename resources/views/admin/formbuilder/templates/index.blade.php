@extends('layouts.admin')

@section('content')
    <h1>test</h1>
    <a href="{{route('admin.formbuilder.create')}}">Create Web Forms</a>

    @if(count($forms) > 0)
        @foreach($forms as $form)
            <p><a href="{{route('admin.formbuilder.edit', $form->id)}}">{{$form->name}}</a></p>
        @endforeach
    @else
        <p>No forms found.</p>
    @endif
@endsection