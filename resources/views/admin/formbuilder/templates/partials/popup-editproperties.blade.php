<div class="list-btr">
    <h2>Web Form Properties</h2>
</div>

<div class="modalwindow">
    <form action="{{route('admin.formbuilder.update', $form->id)}}" method="POST">
        {{csrf_field()}}

        <input type="hidden" name="_method" value="patch" />
        <textarea name="fields" style="display: none;">{{$form->fields}}</textarea>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <label for="name">Web Form Name </label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="name" id="name" class="form-control" value="{{$form->name}}">
                </div>
            </div>
        </div>

        <hr>
        <input type="submit" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">
    </form>
</div>