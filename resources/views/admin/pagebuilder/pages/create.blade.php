@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Page</div>

                <div class="card-body">
                    <form action="{{route('admin.pagebuilder.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Page Title</label>
                            <input type="text" name="page_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Page Url</label>
                            <input type="text" name="page_url" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Template</label>
                            <select name="folder" class="form-control">
                                <option value="">/</option>
                                @foreach($templates as $template)
                                    <option value="{{$template}}">{{$template}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Folder</label>
                            <select name="folder" class="form-control">
                                <option value="">/</option>
                                @foreach($directories as $directory)
                                    <option value="{{$directory}}">{{$directory}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="page_body" cols="30" rows="10" class="form-control" id="page_body"></textarea>
                        </div>
                        <button class="btn btn-primary btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
