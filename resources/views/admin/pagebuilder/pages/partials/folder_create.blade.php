<div id="newfolder-popup" class="white-popup mfp-hide popup-content-wrapper">
    <div class="list-btr">
        <h2>Assign Template</h2>
    </div>
    <form action="{{route('admin.pagebuilder.folder.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label>Parent Folder</label>
                </div>
                <div class="col-sm-8">
                    <select name="folder" class="form-control m">
                        <option value="">/</option>
                        @foreach($directories as $directory)
                            <option value="{{$directory}}">/{{$directory}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label>Folder Name</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-default">Submit</button>
    </form>
</div>