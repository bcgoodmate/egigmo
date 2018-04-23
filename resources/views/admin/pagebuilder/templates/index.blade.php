@extends('layouts.admin')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            {{ session('status') }}
        </div>
    @endif

    <div class="list-btr">
        <h2>Page Templates</h2>
    </div>
    <br>
    <div class="btn-add">
        <ul>
            <li><a id="" class="" href="{{route('admin.pagetemplatebuilder.create')}}">Add Templates</a></li>
        </ul>
    </div>
    <div class="table-main">
        <table id="table-anchor" class="display" style="width:100%">
            <thead>
            <tr class="">
                <th>Templates</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($templates as $template)
                <tr>
                    <td>{{$template -> name}} @if($template->default_template)(default template)@endif </td>
                    <td><a href="{{route('admin.pagetemplatebuilder.edit',$template->id)}}" class="blue">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection