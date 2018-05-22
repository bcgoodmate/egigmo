@extends('layouts.admin')

@section('content')
<div class="" id="pt02">
    <div class="card-header"><h1>Edit Template</h1></div>
    <br>
    <div class="btn-add">
        <ul>
            <li><a id="" class="popup-edit" href="#tab0102">Assign this Template to ...</a></li>
            <li>
                <div class="btn-group">
                    <button type="button" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="" href="/admin/templates-archive">Archive and Rollback</a></li>
                        <li><a class="popup-edit" href="#tab0920">Optimize Content</a></li>
                        <li><a class="popup-edit" href="#tab2920">View Audit Log</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
        <div class="form-builders ">
    <div class="row">
            <div class="card">

                <div class="card-body">
                    <form action="{{route('admin.pagetemplatebuilder.update',$template->id)}}" method="post" data-module="templatebuilder">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="patch" />
                        @include('admin.pagebuilder.templates.partials.form',array('content' => '{tag_pagecontent}'))
                    </form>
                    <br>
                    @include('admin.pagebuilder.templates.partials.delete')
                </div>
            </div>
        </div>
    </div>
    <div class="webform-popup">
        <div class="popup-content-wrapper mfp-hide" id="tab0102">
            <div class="">
                <div class="list-btr">
                    <h2>Assign Template</h2>
                </div>
                <div class="modalwindow">
                    <form action="" method="POST">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="name">Assign template to items by moving from left to right</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <select name="" class="form-control">
                                        <option selected="selected" value="1">Web Pages</option>
                                        <option value="">News</option>
                                        <option value="">Blogs</option>
                                        <option value="">Events</option>
                                        <option value="">Catalogs</option>
                                        <option value="">FAQs</option>
                                        <option value="">Forums</option>
                                        <option value="">Web App Items</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <textarea rows="10" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <textarea rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="popup-content-wrapper mfp-hide" id="tab0920">
            <div class="">
                <div class="list-btr">
                    <h2>Optimize Content (experimental)</h2>
                </div>
                <div class="modalwindow">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>No optimizations found. Content was searched for list items with anchors which could have been transformed to dynamic menus, and for form elements which could be transformed to web form modules.</p>
                            </div>
                        </div>
                    </div>
                    <div class="footerbuttons">
                        <hr>
                        <input type="submit" id="btnSaveForm" value="Perform Selected Changes" class="btn btn-primary btn-default">
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-content-wrapper mfp-hide" id="tab2920">
            <div class="">
                <div class="list-btr">
                    <h2>Audit Log</h2>
                </div>
                <div class="modalwindow">
                    <div class="warningMessage">Archived information older than 90 days is automatically deleted from the system.</div>
                </div>
            </div>
        </div>
    </div>

</div>



@endsection