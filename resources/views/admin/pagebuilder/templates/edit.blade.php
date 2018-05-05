@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-inner">
            <div class="card">
                <div class="card-header"><h1>Edit Template</h1></div>
                <hr>

                <div class="card-body">
                    <form action="{{route('admin.pagetemplatebuilder.update',$template->id)}}" method="post" class="pageForm">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="patch" />
                        @include('admin.pagebuilder.templates.partials.form',array('content' => '{tag_pagecontent}'))
                    </form>
                    <br>
                    @include('admin.pagebuilder.templates.partials.delete')
                </div>
            </div>
        </div>
    </div>
@endsection
