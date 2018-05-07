@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-inner">
            <div class="list-btr">
                <h2>New Web Form</h2>
            </div>
            <br>

            <div class="btn-add">
                <ul>
                    <li><a id="" class="" href="#">Edit Properties</a></li>
                </ul>
            </div>

            <div id="webform-builder">
                <div class="row">
                    <div class="col-md-7">
                        <div id="field-buttons">
                            <div id="system-fields" class="clearfix">
                                <h1>Select system fields to add to Web Form </h1>

                                <ul id="tabs" class="">
                                    <li class="active"><a href="#fieldgrougcontacts">Contacts</a></li>
                                    <!--<li><a href="#fieldgrougmisc">Misc</a></li>-->
                                </ul>

                                <div id="fieldgrougcontacts" class="list-tab active clearfix">
                                    <div class="row"></div>
                                </div>

                                <div id="fieldgrougmisc" class="list-tab">
                                    <div class="row"></div>
                                </div>
                            </div>

                            <hr>

                            <div id="custom-fields" class="clearfix">
                                <h1>Custom Fields </h1>
                                <div class="row"></div>
                            </div>

                        </div>

                        <div class="list-btr-top">
                            <input type="button" id="" value="Update" class="btn btn-primary btn-default">
                            <input type="button" id="" value="Copy this Web Form" class="btn btn-default">
                            <input type="button" id="" value="Delete" class="btn btn-default">
                        </div>

                    </div>

                    <div class="col-md-5">
                        <div id="wysiwyg">
                            <div id="start-form">
                                <div id="edit-form-title">
                                    <h1>
                                        <strong id="form-title">Title</strong>
                                    </h1>
                                </div>
                            </div>

                            <div class="dd" id="nestable">
                                <span class="req">*</span> Required
                                <ul class="dd-list sortable" id="form-system-field"></ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="popup-contentx" class="hide">
                <div class="popup-content-wrapper">
                    <div class="list-btr">
                        <h2>Web Form Properties</h2>
                    </div>

                    <div class="modalwindow">
                        <form id="" action="http://localhost:8080/admin/webformscreate">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="name">Web Form Name </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="name" id="name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <input type="button" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

