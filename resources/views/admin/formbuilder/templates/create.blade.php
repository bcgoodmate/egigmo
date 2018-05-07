@extends('layouts.admin')

@section('content')
    
    <div class="form-builders">
        <div class="list-btr">
            <h2>New Form Builders</h2>
        </div>
        <br>
        <div class="row">
            <div class="col-inner">    

                <div class="btn-add">
                    <ul>
                        <li><a id="" class="popup-edit" href="#p0p01">Edit Properties</a></li>
                        <li><a id="" class="popup-edit" href="#pop02">Preview Web Form</a></li>
                        <li><a id="" class="popup-edit" href="#pop03">Autoresponder E-mail</a></li>
                        <li><a id="" class="popup-edit" href="#pop04">Notification E-mail</a></li>
                        <li>
                            <div class="btn-group">
                              <button type="button" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                More Action <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="popup-edit" href="#pop05">Add Web Form to a Web Page</a></li>
                                <li><a class="popup-edit" href="#pop06">Get Web Form HTML Code</a></li>
                                <li><a class="popup-edit" href="#pop07">Customize Web Form</a></li>                          
                                <li><a class="popup-edit" href="#pop08">View Audit Log</a></li>
                              </ul>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="webform-builder">
                    <div class="row">
                        <div class="col-md-7 left-rt">
                            <div id="field-buttons">
                                <div id="system-fields" class="clearfix">
                                    <h1>Select system fields to add to Web Form </h1>

                                    <div class="border-tp">
                                        <ul id="tabs" class="">
                                            <li class="active"><a href="#fieldgrougcontacts">Contacts</a></li>
                                        </ul>

                                        <div id="fieldgrougcontacts" class="list-tab active clearfix">
                                            <div class="row"></div>
                                        </div>

                                        <div id="fieldgrougmisc" class="list-tab">
                                            <div class="row"></div>
                                        </div>
                                    </div>
                                </div>

                                <div id="custom-fields" class="clearfix">
                                    <h1>Custom Fields </h1>
                                    <div class="row">
                                        
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-5 right-rt">
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

                <span class="positionMarker"></span>
                
                <div class="list-btr-top">
                    <input type="button" id="" value="Update" class="btn btn-primary btn-default">
                    <input type="button" id="" value="Copy this Web Form" class="btn btn-default">
                    <input type="button" id="" value="Delete" class="btn btn-default">
                </div>

                <div class="webform-popup">

                        <div class="mfp-hide popup-content-wrapper" id="p0p01">

                            <div class="">

                            
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

                        <div class="mfp-hide popup-content-wrapper" id="pop02">

                            <div class="">

                            
                                <div class="list-btr">
                                    <h2>Preview</h2>
                                </div>

                                <div class="modalwindow">                          
                                   <span class="req">*</span>  Required

                                   <form action="" method="post">  

                                        <div>
                                            <label for="name">Email Address </label><br>
                                            <input type="text" name="name" id="name" class="form-control-auto" value="">
                                        </div>
                                        <div>
                                            <label for="name">Home Fax Number </label>
                                            <br>
                                            <input type="text" name="name" id="name" class="form-control-auto" value="">
                                        </div>
                                        <div>
                                            <label for="name">Title </label>   <br>                                             
                                            <select name="Title" id="Title" class="form-control-auto">
                                                <option value="">DR</option>
                                                <option value="">MISS</option>
                                                <option value="" selected="selected">MR</option>
                                                <option value="">MRS</option><option value="1599810">MS</option>
                                            </select>                                                
                                        </div>
                                        <div>
                                            <label for="name">First Name  </label><br>
                                            <input type="text" name="name" id="name" class="form-control-auto" value="">
                                        </div>
                                        <div>
                                            <label for="name">Last Name </label><br>
                                            <input type="text" name="name" id="name" class="form-control-auto" value="">                                              
                                        </div>
                                        <div>
                                            <label for="name">Work Address</label><br>
                                            <input type="text" name="name" id="name" class="form-control-auto" value="">                                               
                                        </div>

                                        <br>
                                       
                                       <input type="submit" id="btnSaveForm" value="Submit" class="btn btn-default">

                                    </form>
                                </div>

                            </div>      

                        </div>

                        <div class="mfp-hide popup-content-wrapper" id="pop03">

                            <div class="">

                                <div class="list-btr">
                                    <h2>Autoresponder E-mail</h2>
                                </div>                           

                                <div class="modalwindow">

                                    <form id="" action=""> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
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
                                                <div class="col-sm-4">
                                                    <label for="name">Email Subject:</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="name" id="name" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="name">Email Subject:</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="name" id="name" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="name">From Name:</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="name" id="name" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
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
                                                <div class="col-sm-4">
                                                    <label for="name">Template: </label>
                                                </div>
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
                                                    <span id="" class="prev-edit">
                                                        <a href="#">Preview</a>
                                                        <span class="actionSeparator">|</span>
                                                        <a href="#">Edit</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <h3><b>Email Content</b></h3>
                                        <hr>

                                        <textarea rows="10" class="form-control">                                        
                                        </textarea>

                                        <hr>

                                        <input type="button" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">
                                        <input type="button" id="btnCancel" value="Email Me" class="btn btn-default">

                                    </form>

                                </div>

                            </div>      

                        </div>

                        <div class="mfp-hide popup-content-wrapper" id="pop05">

                            <div class="">
                            
                                <div class="list-btr">
                                    <h2>1-Click Insert</h2>
                                </div>

                                <div class="modalwindow">

                                    <form id="" action="">  
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="name">Option</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="ai-01" type="checkbox" name=""><label for="ai-01">Load Working Copy</label>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <input type="button" id="" value="Save" class="btn btn-primary btn-default">

                                    </form>
                                </div>

                            </div>      

                        </div>

                        <div class="mfp-hide popup-content-wrapper" id="pop06">

                            <div class="">
                            
                                <div class="list-btr">
                                    <h2>HTML Code:</h2>
                                </div>

                                <div class="modalwindow">

                                    <form id="" action=""> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="name">HTML Code:</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <textarea rows="10" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="name">Redirect After Submit:</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="checkbox" name="">
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="name">Preview:</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Home Fax Number </label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <select class="form-control">
                                                           <option value="">DR</option>
                                                           <option value="">MISS</option>
                                                           <option value="" selected="selected">MR</option>
                                                           <option value="">MRS</option>
                                                           <option value="">MS</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>First Name </label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Work Address</label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zipcode/Postcode</label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select class="form-control">
                                                            <option>Philippines</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Work Fax Number </label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Work Phone Number </label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Cell Phone Number </label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Company</label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Web Address </label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Home Phone Number</label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Home Address</label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Zipcode/Postcode </label>
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Country </label>
                                                        <select class="form-control">
                                                            <option>Philippines</option>
                                                        </select>
                                                    </div>
                                                    <input type="submit" name="" class="btn btn-default">

                                                </div>
                                            </div>
                                        </div> 
                                       
                                    </form>

                                </div>

                            </div>      

                        </div>

                        <div class="mfp-hide popup-content-wrapper" id="pop07">

                            <div class="">
                            
                                <div class="list-btr">
                                    <h2>Web Form Editor</h2>
                                </div>

                               <div class="modalwindow">

                                    <form id="" action="">  
                                        
                                        <div class="form-group">
                                            <textarea rows="10" class="form-control"></textarea>
                                        </div>


                                        <hr>
                                        <input type="button" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">
                                        <input type="button" id="btnSaveForm" value="Restore to Default" class="btn btn-default">
                                        

                                    </form>
                                </div>

                            </div>      

                        </div>

                        <div class="mfp-hide popup-content-wrapper" id="pop08">

                            <div class="">
                            
                                <div class="list-btr">
                                    <h2>Audit Log</h2>
                                </div>

                                <div class="modalwindow">

                                    <div id="" class="warningMessage">Archived information older than 90 days is automatically deleted from the system.</div>

                                    <form id="" action="">  

                                        

                                        <table id="" class="rgMasterTable" cellspacing="0" cellpadding="0" border="0">
                                           <tbody>
                                              <tr>
                                                 <th class="rgHeader var">Action</th>
                                                 <th class="rgHeader">Action By</th>
                                                 <th class="rgHeader">Action Date</th>
                                              </tr>
                                              <tr class="rgRow text">
                                                 <td class="var">View</td>
                                                 <td>Kirk Alvar</td>
                                                 <td>17-Apr-2018 02:54 PM</td>
                                              </tr>
                                              <tr class="rgAltRow text">
                                                 <td class="var">View</td>
                                                 <td>Kirk Alvar</td>
                                                 <td>17-Apr-2018 02:50 PM</td>
                                              </tr>
                                              <tr class="rgRow text">
                                                 <td class="var">View</td>
                                                 <td>Kirk Alvar</td>
                                                 <td>17-Apr-2018 02:06 PM</td>
                                              </tr>
                                              <tr class="rgAltRow text">
                                                 <td class="var">Edit</td>
                                                 <td>Kirk Alvar</td>
                                                 <td>17-Apr-2018 02:06 PM</td>
                                              </tr>
                                              <tr class="rgRow text">
                                                 <td class="var">View</td>
                                                 <td>Kirk Alvar</td>
                                                 <td>17-Apr-2018 02:03 PM</td>
                                              </tr>
                                              <tr class="rgAltRow text">
                                                 <td class="var">View</td>
                                                 <td>Kirk Alvar</td>
                                                 <td>17-Apr-2018 01:57 PM</td>
                                              </tr>
                                              <tr class="rgRow text">
                                                 <td class="var">Edit</td>
                                                 <td>Kirk Alvar</td>
                                                 <td>17-Apr-2018 01:57 PM</td>
                                              </tr>
                                           </tbody>
                                        </table>

                                    </form>
                                </div>

                            </div>      

                        </div>

                        <div class="mfp-hide popup-content-wrapper" id="pop04">

                            <div class="">
                            
                                <div class="list-btr">
                                    <h2>Notification E-mail</h2>
                                </div>

                               <div class="modalwindow">

                                    <form id="" action="">  

                                        <p>Please enter one or more email addresses at which you wish to receive the submitted form data. Separate email addresses by semi-colon ";". </p>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label>Email Addresses: </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="" class="form-control">
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
        </div>
    </div>
@endsection


