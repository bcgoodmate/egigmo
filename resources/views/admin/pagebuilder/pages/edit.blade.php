@extends('layouts.admin')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            {{ session('status') }}
        </div>
    @endif

    @if (session('fail_status'))
        <div class="alert alert-danger" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            {{ session('fail_status') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Edit Page</h1></div>
                <hr>

                <div class="card-body">
                    <form action="{{route('admin.pagebuilder.update',$page->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="patch" />
                        @include('admin.pagebuilder.pages.partials.form')
                    </form>
                    @include('admin.pagebuilder.pages.partials.folder_create')
                    @include('admin.pagebuilder.pages.partials.delete')
                </div>
            </div>
        </div>
    </div>
@endsection
