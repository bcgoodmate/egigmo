@extends('layouts.admin')

@section('content')

	   	
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
					<div class="col-md-4">

					   <div id="field-buttons">

					      <div id="system-fields" class="clearfix">

					      	<h1>Select system fields to add to Web Form </h1>

					         <ul id="tabs" class="clear">
					            <li class="active"><a href="#contact">Contacts </a></li>
					            <li><a href="#ecommerce">E-Commerce </a></li>
					            <li><a href="#marketing">E-Mail Campaigns </a></li>
					            <li><a href="#other">Misc </a></li>
					            <li><a href="#list">List </a></li>
					            <li><a href="#innerForms">CRM Forms </a></li>
					         </ul>

					        <ul id="contact" class="clear list-tab active">
					            <li class="used"><a href="#" >Title, Firstname / Lastname</a></li>
					            <li><a href="#" >Email Address</a></li>
					            <li><a href="#" >Home Address</a></li>
					            <li><a href="#" >Home Phone</a></li>
					            <li><a href="#" >Work Address</a></li>
					            <li><a href="#" >Home Fax</a></li>
					            <li><a href="#" >Work Phone</a></li>
					            <li><a href="#" >Work Fax</a></li>
					            <li><a href="#" >Cell Phone</a></li>
					            <li><a href="#" >Web Address</a></li>
					            <li><a href="#" >Company Details</a></li>
					            <li><a href="#" >Date of Birth</a></li>
					            <li><a href="#" >Username</a></li>
					            <li><a href="#" >Password</a></li>
					        </ul>
							
							<ul id="ecommerce" class="clear list-tab">
							   <li><a id="a-301">Payment Method Options</a></li>
							   <li><a id="a-300">Credit Card Processing</a></li>
							   <li><a id="a-302">Credit Card (Existing Orders)</a></li>
							   <li><a id="a-303">Update Credit Card details</a></li>
							   <li><a id="a-13">Billing Address</a></li>
							   <li><a id="a-12">Shipping Address</a></li>
							   <li><a id="a-40">Shipping Details</a></li>
							   <li><a id="a-41">Shipping Attention</a></li>
							</ul>

							<ul id="marketing" class="clear list-tab">
							   <li><a id="a-500">Refer-a-Friend</a></li>
							   <li><a id="a-30">Anniversary 1 Date</a></li>
							   <li><a id="a-31">Anniversary 2 Date</a></li>
							   <li><a id="a-32">Anniversary 3 Date</a></li>
							   <li><a id="a-33">Anniversary 4 Date</a></li>
							   <li><a id="a-34">Anniversary 5 Date</a></li>
							</ul>

							<ul id="other" class="clear list-tab">
							   <li><a id="a-200">File Attachment</a></li>
							   <li><a id="a-402">Image Verification</a></li>
							   <li><a id="a-404">Recaptcha V2</a></li>
							   <li class="used"><a id="a-304">Anti-bot Fraud Protection</a></li>
							</ul>

							<ul id="list" class="clear list-tab">
							   <li class="used"><a>You don't have any Campaign Lists.</a></li>
							</ul>

							<ul id="innerForms" class="clear list-tab">
							   <li><a id="f-327">Company Details</a></li>
							   <li><a id="f-326">Personal Details</a></li>
							   <li><a id="f-400634">Seller Account</a></li>
							</ul>

					      </div>

					      <div id="custom-fields" class="clearfix">
					     	 <h1>Custom Fields </h1>
					         <ul id="create" class="clear">
					            <li><a href="#">DateTime</a></li>
					            <li><a href="#">List (Checkbox List)</a></li>
					            <li><a href="#">List (Dropdown List)</a></li>
					            <li><a href="#">List (Listbox List)</a></li>
					            <li><a href="#">List (Radio List)</a></li>
					            <li><a href="#">Number</a></li>
					            <li><a href="#">Text (Multiline)</a></li>
					            <li><a href="#">Text (String)</a></li>
					            <li><a href="#">True/False (Boolean)</a></li>
					         </ul>
					      </div>
					   </div>

					   <div class="list-btr-top">
					       	<input type="button" id="" value="Update" class="btn btn-primary btn-default">
					       	<input type="button" id="" value="Copy this Web Form" class="btn btn-default">
					       	<input type="button" id="" value="Delete" class="btn btn-default">
					    </div>



					</div>

					<div class="col-md-3">

					   <div id="wysiwyg">
					      <div id="start-form">
					         <div id="edit-form-title">
					            <h1>
					               <strong id="form-title">New Web Form</strong>
					            </h1>
					         </div>
					      </div>


					   </div>
					</div>

				</div>
			</div>



	        <div id="popup-content" class="hide">
	        	
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


	        
	    	
    	
@endsection

