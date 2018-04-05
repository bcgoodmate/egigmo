@extends('admin._templates.dashboard')

@section('content')
    <div class="container">
        <h1>New Page</h1>
        <br>
        <form action="{{route('admin.pagebuilder.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>Page Title</label>
                <input type="text" name="page_title" class="form-control">
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

            <textarea name="page_body" cols="30" rows="10" class="form-control"></textarea>
            <button class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection