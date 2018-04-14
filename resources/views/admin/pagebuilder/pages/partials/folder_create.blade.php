<div id="newfolder-popup" class="white-popup mfp-hide">
    <form action="{{route('admin.pagebuilder.folder.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label>Folder Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Parent Folder</label>
            <select name="folder" class="form-control m">
                <option value="">/</option>
                @foreach($directories as $directory)
                    <option value="{{$directory}}">/{{$directory}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary btn-default">Submit</button>
    </form>
</div>