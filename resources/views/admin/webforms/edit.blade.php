@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>Web Form</h2>
	        </div>
			
			<br>

	        <div class="btn-add">
		        <ul>
		            <li><a id="" class="popup-edit" href="#edit-prop">Edit Properties</a></li>
		            <li><a id="" class="popup-edit" href="#preview-web">Preview Web Form</a></li>
		            <li><a id="" class="popup-edit" href="#autoresponder">Autoresponder E-mail</a></li>
		            <li>
						<div class="btn-group">
						  <button type="button" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    More Action <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu">
						    <li><a class="popup-edit" href="#chooseweb">Add Web Form to a Web Page</a></li>
						    <li><a class="popup-edit" href="#codeweb">Get Web Form HTML Code</a></li>
						    <li><a class="popup-edit" href="#custom-form">Customize Web Form</a></li>						   
						    <li><a class="popup-edit" href="#view-audit">View Audit Log</a></li>
						  </ul>
						</div>
		            </li>
		        </ul>

		    </div>


	        

			<div id="webform-builder">

				<div class="row">

					<div class="col-custom left">

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

					        <ul id="contact" class="clear list-tab active clearfix">
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
					         <ul id="create" class="clearfix">
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

					<div class="col-custom right">

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

							   <ul class="webform ui-sortable" id="form-system-field">

							      <li id="" class="">
							         <div>
							            <label for="Title">Title</label>
							            <select name="Title" id="Title" class="form-control">
							               <option value="1599812">DR</option>
							               <option value="1599811">MISS</option>
							               <option value="1599808" selected="selected">MR</option>
							               <option value="1599809">MRS</option>
							               <option value="1599810">MS</option>
							            </select>
							         </div>

							         <div>
							         	<label for="FirstName">First Name <span class="req">*</span> </label>
							         	<input type="text" name="FirstName" id="FirstName" class="form-control">
							         </div>

							         <div>
							         	<label for="LastName">Last Name <span class="req">*</span> </label>
							         	<input type="text" name="LastName" id="LastName" class="form-control">
							         </div>

							         <div class="field-actions">
							         	<a href="#" class="edit" title="Edit "><i class="icon far fa-edit"></i></a> 
							         	<a href="#" class="delete" title="delete"><i class="icon fas fa-minus-circle"></i></a>
							         </div>

							      </li>

							      <li id="" class="">
							      	<div>
								         <label for="EmailAddress">Email Address <span class="req">*</span></label>
								         <input type="text" name="EmailAddress" id="EmailAddress" class="form-control">								        
								     </div>

								     <div class="field-actions">
								         <a href="#" class="mandatory" title="mandatory	"><i class="icon fas fa-minus-circle"></i></a>
								     </div>
							      </li>

							      <li id="" class="">
							         <div>
							         	<label for="Security1">Anti-bot Fraud Protection module</label>
							         </div>
							         <div class="field-actions">
							         	<a href="#" class="delete" title="delete"><i class="icon fas fa-minus-circle"></i></a>
							         </div>
							      </li>

							   </ul>

							   <ul class="webform" id="innerforms"></ul>

							   <ul class="webform" id="sellmembership"></ul>

							   <ul class="webform" id="email-list"></ul>

							</div>


					   </div>
					</div>

				</div>
			</div>


			<div class="webform-popup">

	        	<div class="mfp-hide" id="edit-prop">

	        		<div class="popup-content-wrapper">

		        	
			        	<div class="list-btr">
				            <h2>Web Form Properties</h2>
				        </div>

			        	<div class="modalwindow">

			        		<form id="" action="">	        		

								<table id="" class="" cellspacing="0" cellpadding="0" border="0">
								   <tbody>
								      <tr>
								         <td class="var">
								            <label>
								            Web Form Name
								            <a class="help" title="Please enter a name for your web form.">(?)</a></label>
								         </td>
								         <td>
								            <input name="" type="text" value="New Web Form" id="" class="form-control">						           
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label>
								            	Use Workflow? 
								            	<a href="#" type="button" class="" data-toggle="tooltip" data-placement="top" title="You can attach a business process to this web form. Workflows are business processes that you can create that send real-time alerts via email or SMS to designated recipients within your organization when your customers fill in this form.">(?)</a>
								        	</label>
								         </td>
								         <td>
								            <select name="" id="" class="form-control">
								               <option value="">Don't use a workflow</option>
								               <option value="">Buyer Registration</option>
								               <option value="">Content Approval Workflow</option>
								               <option value="">Customer Inquiry Workflow</option>
								               <option value="">Seller Registration</option>
								            </select>
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label>
									            Secure Zone 
									            <a class="help" title="As part of your web form you can automatically subscribe customers to a secure zone and log them in automatically. You may include the Username and Password fields on your web form if you wish for the customer to use these the next time they log in, alternatively they can fill in the web form again to gain access.">(?)</a>
									        </label>
								         </td>
								         <td>
								            <select name="uc$" id="" class="form-control">
								               <option selected="selected" value="-1">Don't subscribe to a Secure Zone</option>
								               <option value="0">Sell ongoing membership access to a secure zone</option>
								               <option value="8644">Administrator</option>
								               <option value="8645">Buyer</option>
								               <option value="8653">Censored</option>
								               <option value="8633">Seller Level 1. Free</option>
								               <option value="8647">Seller Level 2. Pro</option>
								               <option value="8648">Seller Level 3. Featured</option>
								            </select>
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label>
									            Affiliate Program Lists  
									            <a class="help" title="As part of your web form you can automatically subscribe customers to one of your affiliate programs. When a customer is subscribed to an affiliate program, they'll receive an email with their affiliate link which they can then place on their website so they refer leads to you.">(?)</a>
									        </label>
								         </td>
								         <td>
								            <select name="uc$" id="" disabled="disabled" class="form-control">
								               <option selected="selected" value="-1">You don't have any Affiliate Programs.</option>
								            </select>
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label class="choice">Create Customer Case 
								            	<a class="help" title="When a web form is submitted on your website a Case is automatically created and attached to the customer record who is making the enquiry. If each enquiry has a relatively fixed monetary value then you can set this option so a new sales opportunity is also created. Sales Opportunities are a great way to track and measure sales.">(?)</a>
								            </label>                                      
								         </td>
								         <td>
								            <input type="checkbox" id="chkCreateCase" checked="checked" disabled="disabled">
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label class="choice" for="uc_chkSetWholeSale">
								            Wholesaler Subscription
								            </label>
								         </td>
								         <td>
								            <input name="uc$" type="checkbox" id="uc_chkSetWholeSale">
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label class="choice" for="uc_chkCreateOppotunity">
								            	Create Sales Opportunity 
								            	<a class="help" title="When a web form is submitted on your website a Case is automatically created and attached to the customer record who is making the enquiry. If each enquiry has a relatively fixed monetary value then you can set this option so a new sales opportunity is also created. Sales Opportunities are a great way to track and measure sales.">(?)</a>
								            </label>
								         </td>
								         <td>
								            <input name="uc$chkCreateOppotunity" type="checkbox" id="uc_chkCreateOppotunity" class="open-check">
								           
								         </td>
								      </tr>

								      <!-- <tr id="opportunity-details" style="display: none;">
								         <td colspan="2">
								            <h2 class="hybridFormHeader">
								               <span class="hybridFormTitlewrap">Sales Opportunity Options</span>
								            </h2>
								            <table border="0" cellpadding="0" cellspacing="0" width="100%">
								               <tbody>
								                  <tr>
								                     <td class="var">
								                        <label>
								                        Opportunity Type  <a class="help" title="Choose the default opportunity type that should be applied to new sales opportunities created via this web form.">(?)</a></label>
								                     </td>
								                     <td>
								                        <select name="uc$ddlOpportunityType" id="uc_ddlOpportunityType">
								                           <option value="816829">New Business</option>
								                           <option value="816830">Existing Business</option>
								                           <option value="816831">Add-On Business</option>
								                           <option value="816832">Maintenance</option>
								                           <option value="816833">Upgrade</option>
								                           <option value="816834">Services</option>
								                        </select>
								                     </td>
								                  </tr>
								                  <tr>
								                     <td class="var">
								                        <label>
								                        Opportunity Stage <a class="help" title="Choose the default opportunity stage that should be applied to new sales opportunities created via this web form.">(?)</a></label>
								                     </td>
								                     <td>
								                        <select name="uc$ddlOpportunityStage" id="uc_ddlOpportunityStage">
								                           <option value="1223743">Prospecting</option>
								                           <option value="1223744">Needs Analysis</option>
								                           <option value="1223745">Presentation/Demo</option>
								                           <option value="1223746">Value Proposition</option>
								                           <option value="1223747">Proposal/Price Quote</option>
								                           <option value="1223748">Selected</option>
								                           <option value="1223749">Negotiation</option>
								                           <option value="1223750">Closed/Won</option>
								                           <option value="1223751">Closed/Lost</option>
								                        </select>
								                     </td>
								                  </tr>
								                  <tr>
								                     <td class="var">
								                        <label>
								                        Close Date <a class="help" title="Choose the date that you roughly expect to bring this sales opportunity to a close.">(?)</a></label>
								                     </td>
								                     <td>
								                        <select name="uc$ddlCycleType" id="uc_ddlCycleType">
								                           <option value="3">In a week</option>
								                           <option value="4">In a fortnight</option>
								                           <option value="5">In a month</option>
								                           <option selected="selected" value="6">In 3 months</option>
								                           <option value="7">In 6 months</option>
								                           <option value="8">In 1 year</option>
								                        </select>
								                     </td>
								                  </tr>
								                  <tr>
								                     <td class="var">
								                        <label>
								                        Probability (%) <a class="help" title="Choose the default probability that should be applied to new sales opportunities created via this web form.">(?)</a></label>
								                     </td>
								                     <td>
								                        <input name="uc$txtProbability" type="text" id="uc_txtProbability">
								                     </td>
								                  </tr>
								                  <tr>
								                     <td class="var">
								                        <label>
								                        Amount <a class="help" title="Enter the estimated value of this sales opportunity to your organization.">(?)</a></label>
								                     </td>
								                     <td>
								                        <input name="uc$txtAmount" type="text" id="uc_txtAmount">
								                     </td>
								                  </tr>
								               </tbody>
								            </table>
								         </td>
								      </tr> -->

								   </tbody>
								</table>

								<div id="opportunity-details">
								
									<div class="list-btr">
							            <h2 class="hybridFormHeader">
							               <span class="hybridFormTitlewrap">Sales Opportunity Options</span>
							            </h2>
							        </div>


						            <table border="0" cellpadding="0" cellspacing="0" width="100%">
						               <tbody>
						                  <tr>
						                     <td class="var">
						                        <label>
						                        	Opportunity Type  
							                        <a class="help" title="Choose the default opportunity type that should be applied to new sales opportunities created via this web form.">(?)</a>
							                    </label>
						                     </td>
						                     <td>
						                        <select name="uc$ddlOpportunityType" id="uc_ddlOpportunityType" class="form-control">
						                           <option value="816829">New Business</option>
						                           <option value="816830">Existing Business</option>
						                           <option value="816831">Add-On Business</option>
						                           <option value="816832">Maintenance</option>
						                           <option value="816833">Upgrade</option>
						                           <option value="816834">Services</option>
						                        </select>
						                     </td>
						                  </tr>
						                  <tr>
						                     <td class="var">
						                        <label>
							                        Opportunity Stage 
							                        <a class="help" title="Choose the default opportunity stage that should be applied to new sales opportunities created via this web form.">(?)</a>
							                    </label>
						                     </td>
						                     <td>
						                        <select name="uc$ddlOpportunityStage" id="uc_ddlOpportunityStage" class="form-control">
						                           <option value="1223743">Prospecting</option>
						                           <option value="1223744">Needs Analysis</option>
						                           <option value="1223745">Presentation/Demo</option>
						                           <option value="1223746">Value Proposition</option>
						                           <option value="1223747">Proposal/Price Quote</option>
						                           <option value="1223748">Selected</option>
						                           <option value="1223749">Negotiation</option>
						                           <option value="1223750">Closed/Won</option>
						                           <option value="1223751">Closed/Lost</option>
						                        </select>
						                     </td>
						                  </tr>
						                  <tr>
						                     <td class="var">
						                        <label>
							                        Close Date 
							                        <a class="help" title="Choose the date that you roughly expect to bring this sales opportunity to a close.">(?)</a>
							                    </label>
						                     </td>
						                     <td>
						                        <select name="uc$ddlCycleType" id="uc_ddlCycleType" class="form-control">
						                           <option value="3">In a week</option>
						                           <option value="4">In a fortnight</option>
						                           <option value="5">In a month</option>
						                           <option selected="selected" value="6">In 3 months</option>
						                           <option value="7">In 6 months</option>
						                           <option value="8">In 1 year</option>
						                        </select>
						                     </td>
						                  </tr>
						                  <tr>
						                     <td class="var">
						                        <label>
							                        Probability (%) 
							                        <a class="help" title="Choose the default probability that should be applied to new sales opportunities created via this web form.">(?)</a>
							                    </label>
						                     </td>
						                     <td>
						                        <input name="uc$txtProbability" type="text" id="uc_txtProbability" class="form-control">
						                     </td>
						                  </tr>
						                  <tr>
						                     <td class="var">
						                        <label>
							                        Amount <a class="help" title="Enter the estimated value of this sales opportunity to your organization.">(?)</a>
							                    </label>
						                     </td>
						                     <td>
						                        <input name="uc$txtAmount" type="text" id="uc_txtAmount"  class="form-control">
						                     </td>
						                  </tr>
						               </tbody>
						            </table>
							        
							    </div>

								<div class="list-btr-top">
							       	<input type="button" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">
							       	<input type="button" id="btnCancel" value="Cancel" class="btn btn-default">
							    </div>

							</form>

						</div>
					</div>
				</div>

				<div class="mfp-hide" id="preview-web">

	        		<div class="popup-content-wrapper">

		        	
			        	<div class="list-btr">
				            <h2>Preview</h2>
				        </div>

						<div class="modalwindow">						   
						   <span class="req">*</span>  Required

						   <form action="" method="post">

							   <table id="" class="" cellspacing="0" cellpadding="0" border="0">
								   <tbody>
								      <tr>
								         <td class="var">
								            <label>Title</label>
								         </td>
								         <td>
								            <select name="Title" id="Title" class="form-control">
								            	<option value="1599812">DR</option>
								            	<option value="1599811">MISS</option>
								            	<option value="1599808" selected="selected">MR</option>
								            	<option value="1599809">MRS</option><option value="1599810">MS</option>
								            </select>					           
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								        	<label for="FirstName">First Name <span class="req">*</span></label>								        	
								         </td>
								         <td>
								            <input type="text" name="FirstName" id="FirstName" class="form-control">
								         </td>
								      </tr>
								      <tr>
								         <td class="var">								           
								          	<label for="LastName">Last Name <span class="req">*</span></label>								        	
								         </td>
								         <td>
								            <input type="text" name="LastName" id="LastName" class="form-control">
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label for="EmailAddress">Email Address <span class="req">*</span></label>
								         </td>
								         <td>
								            <input type="text" name="EmailAddress" id="EmailAddress" class="form-control">
								         </td>
								      </tr>								     								      					  

								   </tbody>
								</table>

							   <div class="list-btr-top">						       	
							       	<input type="button" id="btnCancel" value="Close" class="btn btn-default">
							    </div>

							</form>
						</div>

					</div>		

				</div>

				<div class="mfp-hide" id="autoresponder">

	        		<div class="popup-content-wrapper">

		        	
			        	<div class="list-btr">
				            <h2>Autoresponder E-mail</h2>
				        </div>

						

						<div class="modalwindow">

			        		<form id="" action="">	        		

								<table id="" class="" cellspacing="0" cellpadding="0" border="0">
								   <tbody>
								      <tr>
								         <td class="var">
								            <label>Email Subject:</label>
								         </td>
								         <td>
								            <input name="" type="text" value="Thank you for your enquiry" id="" class="form-control">						           
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label>
								            	Email From Address:								            	
								        	</label>
								         </td>
								         <td>
								            <input name="" type="text" value="genesis.revelation89@gmail.com" id="" class="form-control">		
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label>
									            From Name:									            
									        </label>
								         </td>
								         <td>
								            <input name="" type="text" value="Kirk Alvar" id="" class="form-control">
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label>
									           Format:										           
									        </label>
								         </td>
								         <td>
								            <select name="uc$" id="" class="form-control">
								               <option selected="selected" value="-1">Text</option>
								               <option value="-1">HTML</option>
								            </select>
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label class="choice">Template:</label>                                      
								         </td>
								         <td>
								            <select name="" id="" class="form-control">
												<option selected="selected" value="-1">Don't use a template</option>
												<option value="0">Use default template</option>
												<option value="1961266">Blank</option>
												<option value="1961633">Buyer Dashboard</option>
												<option value="1961634">Buyer Dashboard - Account</option>
												<option value="1961635">Buyer Dashboard - Inbox</option>
												<option value="1961636">Buyer Dashboard - Profile</option>
												<option value="1960979">Home</option>
												<option value="1960980">Inner</option>
												<option value="1961434">Seller Dashboard</option>
												<option value="1961437">Seller Dashboard - Account</option>
												<option value="1961436">Seller Dashboard - Inbox</option>
												<option value="1961435">Seller Dashboard - Listing</option>
												<option value="1961438">Seller Dashboard - Tools</option>
												<option value="1968262">test-2</option>
											</select>
											<span id="" class="prev-edit">
												<a href="#">Preview</a>
												<span class="actionSeparator">|</span>
												<a href="#">Edit</a>
											</span>
								         </td>
								      </tr>								      
								     

								   </tbody>
								</table>
								<div class="list-btr-top">
							       	<input type="button" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">
							       	<input type="button" id="btnCancel" value="Email Me" class="btn btn-default">
							       	<input type="button" id="btnCancel" value="Close" class="btn btn-default">
							    </div>

							</form>

						</div>



					</div>		

				</div>

				<div class="mfp-hide" id="chooseweb">

	        		<div class="popup-content-wrapper">
		        	
			        	<div class="list-btr">
				            <h2>Choose web page to instantly publish this content on</h2>
				        </div>

				        <div class="modalwindow">

			        		<form id="" action="">	

			        			<table id="" class="" cellspacing="0" cellpadding="0" border="0">
								   <tbody>
								      <tr>
								         <td class="var">
								            <label>Option</label>
								         </td>
								         <td>
								            <span class="text">
								            	<input id="uc_chkLoadShadow" type="checkbox" name="uc$chkLoadShadow" checked="checked" onclick="">
								            	<label for="uc_chkLoadShadow">Load Working Copy</label>
								            </span>				           
								         </td>
								      </tr>
								  </tbody>
								</table>

			        			<div class="list-btr-top">
							       	<input type="button" id="btnCancel" value="Close" class="btn btn-default">
							    </div>

							</form>
						</div>

					</div>		

				</div>

				<div class="mfp-hide" id="codeweb">

	        		<div class="popup-content-wrapper">

		        	
			        	<div class="list-btr">
				            <h2>Autoresponder E-mail</h2>
				        </div>

						

						<div class="modalwindow">

			        		<form id="" action="">	        		

								<table id="" class="" cellspacing="0" cellpadding="0" border="0">
								   <tbody>
								      <tr>
								         <td class="var">
								            <label>HTML Code:</label>

								         </td>
								         <td>
								            <textarea rows="10" cols="40"></textarea>					           
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label>
								            	Redirect After Submit:							            	
								        	</label>
								         </td>
								         <td>
								            <input id="" type="checkbox" name="">	
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            <label>
									            Preview						            
									        </label>
								         </td>
								         <td>
								            <div class="form-preview">
											   <span class="req">*</span>  Required
											   <table class="webform" cellspacing="0" cellpadding="2" border="0">
											      <tbody>
											         <tr>
											            <td>
											               <label for="Title">Title</label><br>
											               <select name="Title" id="Title" class="form-control">
											                  <option value="1599812">DR</option>
											                  <option value="1599811">MISS</option>
											                  <option value="1599808" selected="selected">MR</option>
											                  <option value="1599809">MRS</option>
											                  <option value="1599810">MS</option>
											               </select>
											            </td>
											         </tr>
											         <tr>
											            <td>
											            	<label for="FirstName">First Name <span class="req">*</span></label><br>
											            	<input type="text" name="FirstName" id="FirstName" class="form-control"> 
											            </td>
											         </tr>
											         <tr>
											            <td>
											            	<label for="LastName">Last Name <span class="req">*</span></label><br>
											            	<input type="text" name="LastName" id="LastName" class="form-control"> 
											            </td>
											         </tr>
											         <tr>
											            <td>
											            	<label for="EmailAddress">Email Address <span class="req">*</span></label><br>
											            	<input type="text" name="EmailAddress" id="EmailAddress" class="form-control"> 
											            </td>
											         </tr>
											        
											         
											         <tr>
											            <td>
											            	<input class="btn btn-default" type="submit" value="Submit" id="">
											            </td>
											         </tr>
											      </tbody>
											   </table>
											</div>
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								            
								         </td>
								         <td>
								            
								         </td>
								      </tr>
								      <tr>
								         <td class="var">
								                                          
								         </td>
								         <td>
								            
								         </td>
								      </tr>								      
								     

								   </tbody>
								</table>
								<div class="list-btr-top">
							       	<input type="button" id="btnCancel" value="Close" class="btn btn-default">
							    </div>

							</form>

						</div>



					</div>		

				</div>

				<div class="mfp-hide" id="custom-form">

	        		<div class="popup-content-wrapper">
		        	
			        	<div class="list-btr">
				            <h2>Web Form Editor</h2>
				        </div>

				        <div class="modalwindow">

			        		<form id="" action="">	

			        			<table id="" class="" cellspacing="0" cellpadding="0" border="0">
								   <tbody>
								      <tr>
								         <td class="var">
								            <label>Option</label>
								         </td>
								         <td>
								            <span class="text">
								            	<input id="uc_chkLoadShadow" type="checkbox" name="uc$chkLoadShadow" checked="checked" onclick="">
								            	<label for="uc_chkLoadShadow">Load Working Copy</label>
								            </span>				           
								         </td>
								      </tr>
								  </tbody>
								</table>

			        			<div class="list-btr-top">
							       	<input type="button" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">
							       	<input type="button" id="btnCancel" value="Restore to Default" class="btn btn-default">
							       	<input type="button" id="btnCancel" value="Close" class="btn btn-default">
							    </div>

							</form>
						</div>

					</div>		

				</div>

				<div class="mfp-hide" id="view-audit">

	        		<div class="popup-content-wrapper">
		        	
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



			        			<div class="list-btr-top">
							       	<input type="button" id="btnCancel" value="Close" class="btn btn-default">
							    </div>

							</form>
						</div>

					</div>		

				</div>



	        </div>






@endsection

