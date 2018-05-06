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
                                    <li><a href="#fieldgrougmisc">Misc</a></li>
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

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="name">Use Workflow?</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-control">
                                            <option value="">Don't use a workflow</option>
                                            <option value="">Buyer Registration</option>
                                            <option value="">Content Approval Workflow</option>
                                            <option value="">Customer Inquiry Workflow</option>
                                            <option value="">Seller Registration</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="name">Secure Zone</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="uc$" id="" class="form-control">
                                            <option selected="selected" value="-1">Don't subscribe to a Secure Zone</option>
                                            <option value="">Sell ongoing membership access to a secure zone</option>
                                            <option value="">Administrator</option>
                                            <option value="">Buyer</option>
                                            <option value="">Censored</option>
                                            <option value="">Seller Level 1. Free</option>
                                            <option value="">Seller Level 2. Pro</option>
                                            <option value="">Seller Level 3. Featured</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="name">Affiliate Program Lists</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="uc$" id="" disabled="disabled" class="form-control">
                                            <option selected="selected" value="-1">You don't have any Affiliate Programs.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="name">Create Customer Case</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="checkbox" name="name" id="name" class="" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="name">Wholesaler Subscription</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="checkbox" name="name" id="name" class="" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="name">Create Sales Opportunity</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input name="" type="checkbox" id="" class="open-check">
                                    </div>
                                </div>
                            </div>

                            <div id="opportunity-details">

                                <hr>
                                <h3><b>Sales Opportunity Options</b></h3>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="name">Opportunity Type</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="uc$ddlOpportunityType" id="uc_ddlOpportunityType" class="form-control">
                                                <option value="">New Business</option>
                                                <option value="">Existing Business</option>
                                                <option value="">Add-On Business</option>
                                                <option value="">Maintenance</option>
                                                <option value="">Upgrade</option>
                                                <option value="">Services</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="name">Opportunity Stage</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-control">
                                                <option value="">Prospecting</option>
                                                <option value="">Needs Analysis</option>
                                                <option value="">Presentation/Demo</option>
                                                <option value="">Value Proposition</option>
                                                <option value="">Proposal/Price Quote</option>
                                                <option value="">Selected</option>
                                                <option value="">Negotiation</option>
                                                <option value="">Closed/Won</option>
                                                <option value="">Closed/Lost</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="name">Close Date</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-control">
                                                <option value="">In a week</option>
                                                <option value="">In a fortnight</option>
                                                <option value="">In a month</option>
                                                <option selected="selected" value="">In 3 months</option>
                                                <option value="">In 6 months</option>
                                                <option value="">In 1 year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="name">Probability (%)</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input name="" type="text" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="name">Amount </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input name="" type="text" id="" class="form-control">
                                        </div>
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

