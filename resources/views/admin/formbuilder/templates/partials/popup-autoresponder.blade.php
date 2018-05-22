<div class="list-btr">
    <h2>Autoresponder E-mail</h2>
</div>

<div class="modalwindow">
    <form action="{{route('admin.systememails.store')}}" method="POST">
        {{csrf_field()}}

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label for="name">Send autoresponder email:</label>
                </div>
                <div class="col-sm-8">
                    <input type="checkbox" name="name" value="">
                </div>
            </div>
        </div>

        <h3><b>Details</b></h3>
        <hr>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label for="name">Email Subject:</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="name" id="name" class="form-control" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label for="name">Email Subject:</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="name" id="name" class="form-control" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label for="name">From Name:</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="name" id="name" class="form-control" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row"> 
                <div class="col-sm-4 text-right">
                    <label for="name">Format: </label>
                </div>
                <div class="col-sm-8">
                    <select name="$" id="" class="form-control">
                        <option selected="selected" value="-1">Text</option>
                        <option value="-1">HTML</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label for="name">Template: </label>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-8">
                            <select name="" id="" class="form-control">
                                <option selected="selected" value="-1">Don't use a template</option>
                                <option value="0">Use default template</option>
                                <option value="">Blank</option>
                                <option value="">Buyer Dashboard</option>
                                <option value="">Buyer Dashboard - Account</option>
                                <option value="">Buyer Dashboard - Inbox</option>
                                <option value="">Buyer Dashboard - Profile</option>
                                <option value="">Home</option>
                                <option value="">Inner</option>
                                <option value="">Seller Dashboard</option>
                                <option value="">Seller Dashboard - Account</option>
                                <option value="">Seller Dashboard - Inbox</option>
                                <option value="">Seller Dashboard - Listing</option>
                                <option value="">Seller Dashboard - Tools</option>
                                <option value="">test-2</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <span id="" class="prev-edit">
                            <a href="#">Preview</a>
                            <span class="actionSeparator">|</span>
                            <a href="#" class="">Edit</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3><b>Email Content</b></h3>
        <hr>

        <textarea rows="10" class="form-control"></textarea>
        <div class="footerbuttons">
            <hr>
            <input type="submit" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">
            <input type="reset" id="btnCancel" value="Email Me" class="btn btn-default">
        </div>
    </form>
</div>