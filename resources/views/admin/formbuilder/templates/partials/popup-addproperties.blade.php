<div class="list-btr">
    <h2>Web Form Properties</h2>
</div>

<div class="modalwindow">
    <form action="{{route('admin.formbuilder.store')}}" method="POST">
        {{csrf_field()}}

        <textarea name="fields" style="display: none;"></textarea>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label for="name">Web Form Name </label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="name" id="name" class="form-control" value="">
                </div>
            </div>
        </div>
        
        <div class="footerbuttons">
            <hr>
            <input type="submit" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">
        </div>
    </form>
</div>