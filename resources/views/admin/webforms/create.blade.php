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
						            <li class="active"><a href="#contact">Contacts </a></li>
						            <li><a href="#ecommerce">E-Commerce </a></li>
						            <li><a href="#marketing">E-Mail Campaigns </a></li>
						            <li><a href="#other">Misc </a></li>
						            <li><a href="#list">List </a></li>
						            <li><a href="#innerForms">CRM Forms </a></li>
						         </ul>						        

						        <div id="contact" class="list-tab active clearfix">

							        <div class="row">
							        	<div class="col-md-6">
							        		<div >
							        			<a href="#" class="used form-control">Title, Firstname / Lastname</a>
							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div class="form-control"><a href="#" >Email Address</a></div>
							        	</div>
							        </div>

							        <div class="row">
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Home Address</a></div>
							        	</div>
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Home Phone</a></div>
							        	</div>
							        </div>

							        <div class="row">
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Work Address</a></div>
							        	</div>
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Home Fax</a></div>
							        	</div>
							        </div>

							        <div class="row">
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Work Phone</a></div>
							        	</div>
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Work Fax</a></div>
							        	</div>
							        </div>

							        <div class="row">
							        	<div class="col-md-6">
							        		<div ><a href="#" class="form-control">Cell Phone</a></div>
							        	</div>
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Web Address</a></div>
							        	</div>
							        </div>

							        <div class="row">
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Company Details</a></div>
							        	</div>
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Date of Birth</a></div>
							        	</div>
							        </div>

							        <div class="row">
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Username</a></div>
							        	</div>
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Password</a></div>
							        	</div>
							        </div>

							    </div>

								<div id="ecommerce" class="list-tab clearfix">

							        <div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Payment Method Options</a>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Credit Card Processing</a></div>
							        	</div>
							        </div>

							        <div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Credit Card (Existing Orders)</a>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Update Credit Card details</a></div>
							        	</div>
							        </div>

							        <div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Billing Address</a>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Shipping Address</a></div>
							        	</div>
							        </div>

							        <div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Shipping Details</a>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div><a href="#" class="form-control">Shipping Attention</a></div>
							        	</div>
							        </div>
							    </div>


								<div id="marketing" class="list-tab">
									<div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Refer-a-Friend</a>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#"  class="form-control">Anniversary 1 Date</a>
							        		</div>
							        	</div>
							        </div>							    
									<div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Anniversary 2 Date</a>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Anniversary 3 Date</a>
							        		</div>
							        	</div>
							        </div>
							        <div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Anniversary 4 Date</a>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Anniversary 5 Date</a>
							        		</div>
							        	</div>
							        </div>
							    </div>							

								<div id="other" class="list-tab">
									<div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">File Attachment</a>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Image Verification</a>
							        		</div>
							        	</div>
							        </div>
							        <div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Recaptcha V2</a>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Anti-bot Fraud Protection</a>
							        		</div>
							        	</div>
							        </div>
							    </div>						

								<div id="list" class="list-tab">
									<div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">You don't have any Campaign Lists.</a>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div class="form-control">
							        			
							        		</div>
							        	</div>
							        </div>
							    </div>

								<div id="innerForms" class="list-tab">
									<div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Company Details</a>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Personal Details</a>
							        		</div>
							        	</div>
							        </div>
							        <div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" class="form-control">Seller Account</a>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div class="form-control">
							        			
							        		</div>
							        	</div>
							        </div>
							    </div>

						      </div>

						      <hr>
						      

								<div id="custom-fields" class="clearfix">
						     	 	<h1>Custom Fields </h1>
							      	<div class="row">
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" for="pl01" class="form-control target">DateTime</a>
								            	<div class="new-field-settings" id="pl01">
								            		<div class="form-group">
									            		<label>Field Name</label>	
									            		<textarea class="form-control"></textarea>	
									            	</div>
									            	<div class="form-group">
									            		<label>Required?</label>
									            		<input type="checkbox" id="">
									            	</div>
									            	<hr>
									            	<a href="#" class="btn btn-primary">save</a>
									            	<a href="#" class="btn btn-default cancel">cancel</a>
								                </div>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" for="pl01" class="form-control target">DateTime</a>
								            	<div class="new-field-settings" id="pl01">
								            		<div class="form-group">
									            		<label>Field Name</label>	
									            		<textarea class="form-control"></textarea>	
									            	</div>
									            	<div class="form-group">
									            		<label>Required?</label>
									            		<input type="checkbox" id="">
									            	</div>
									            	<hr>
									            	<a href="#" class="btn btn-primary">save</a>
									            	<a href="#" class="btn btn-default cancel">cancel</a>
								                </div>
							        		</div>
							        	</div>							        
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" for="pl03" class="form-control target">List (Checkbox List)</a>
								            	<div class="new-field-settings" id="pl03">
								            		<div class="form-group">
									            		<label>Field Name</label>	
									            		<textarea class="form-control"></textarea>	
									            	</div>
									            	<div class="form-group">
									            		<label>Required?</label>
									            		<input type="checkbox" id="">
									            	</div>
									            	<hr>
									            	<a href="#" class="btn btn-primary">save</a>
									            	<a href="#" class="btn btn-default cancel">cancel</a>
								                </div>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" for="pl04" class="form-control target">List (Dropdown List)</a>
								            	<div class="new-field-settings" id="pl04">
								            		<div class="form-group">
									            		<label>Field Name</label>	
									            		<textarea class="form-control"></textarea>	
									            	</div>
									            	<div class="form-group">
									            		<label>Required?</label>
									            		<input type="checkbox" id="">
									            	</div>
									            	<hr>
									            	<a href="#" class="btn btn-primary">save</a>
									            	<a href="#" class="btn btn-default cancel">cancel</a>
								                </div>
							        		</div>
							        	</div>							        
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" for="pl05" class="form-control target">List (Listbox List)</a>
								            	<div class="new-field-settings" id="pl05">
								            		<div class="form-group">
									            		<label>Field Name</label>	
									            		<textarea class="form-control"></textarea>	
									            	</div>
									            	<div class="form-group">
									            		<label>Required?</label>
									            		<input type="checkbox" id="">
									            	</div>
									            	<hr>
									            	<a href="#" class="btn btn-primary">save</a>
									            	<a href="#" class="btn btn-default cancel">cancel</a>
								                </div>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" for="pl06" class="form-control target">List (Radio List)</a>
								            	<div class="new-field-settings" id="pl06">
								            		<div class="form-group">
									            		<label>Field Name</label>	
									            		<textarea class="form-control"></textarea>	
									            	</div>
									            	<div class="form-group">
									            		<label>Required?</label>
									            		<input type="checkbox" id="">
									            	</div>
									            	<hr>
									            	<a href="#" class="btn btn-primary">save</a>
									            	<a href="#" class="btn btn-default cancel">cancel</a>
								                </div>
							        		</div>
							        	</div>							       
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" for="pl07" class="form-control target">Number</a>
								            	<div class="new-field-settings" id="pl07">
								            		<div class="form-group">
									            		<label>Field Name</label>	
									            		<textarea class="form-control"></textarea>	
									            	</div>
									            	<div class="form-group">
									            		<label>Required?</label>
									            		<input type="checkbox" id="">
									            	</div>
									            	<hr>
									            	<a href="#" class="btn btn-primary">save</a>
									            	<a href="#" class="btn btn-default cancel">cancel</a>
								                </div>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" for="pl08" class="form-control target">Text (Multiline)</a>
								            	<div class="new-field-settings" id="pl08">
								            		<div class="form-group">
									            		<label>Field Name</label>	
									            		<textarea class="form-control"></textarea>	
									            	</div>
									            	<div class="form-group">
									            		<label>Required?</label>
									            		<input type="checkbox" id="">
									            	</div>
									            	<hr>
									            	<a href="#" class="btn btn-primary">save</a>
									            	<a href="#" class="btn btn-default cancel">cancel</a>
								                </div>
							        		</div>
							        	</div>							       
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" for="pl09" class="form-control target">Text (String)</a>
								            	<div class="new-field-settings" id="pl09">
								            		<div class="form-group">
									            		<label>Field Name</label>	
									            		<textarea class="form-control"></textarea>	
									            	</div>
									            	<div class="form-group">
									            		<label>Required?</label>
									            		<input type="checkbox" id="">
									            	</div>
									            	<hr>
									            	<a href="#" class="btn btn-primary">save</a>
									            	<a href="#" class="btn btn-default cancel">cancel</a>
								                </div>							        			
							        		</div>
							        	</div>
							        	<div class="col-md-6">
							        		<div>
							        			<a href="#" for="pl10" class="form-control target">True/False (Boolean)</a>
								            	<div class="new-field-settings" id="pl10">
								            		<div class="form-group">
									            		<label>Field Name</label>	
									            		<textarea class="form-control"></textarea>	
									            	</div>
									            	<div class="form-group">
									            		<label>Required?</label>
									            		<input type="checkbox" id="">
									            	</div>
									            	<hr>
									            	<a href="#" class="btn btn-primary">save</a>
									            	<a href="#" class=" btn btn-default cancel">cancel</a>
								                </div>
							        		</div>
							        	</div>
							        </div>
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


								<div id="output">
								   <span class="req">*</span>  Required
								   <ul class="sortable" id="form-system-field">
								   	
								   </ul>						   

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


	        
	    	</div>
	    </div>
    	
@endsection

