@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>New Template</h1></div>
                <hr>

                <div class="card-body">
                    <form action="{{route('admin.pagetemplatebuilder.store')}}" method="POST" class="pageForm">
                        {{csrf_field()}}
                        @include('admin.pagebuilder.templates.partials.form',array('content' => '{tag_pagecontent}'))
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
