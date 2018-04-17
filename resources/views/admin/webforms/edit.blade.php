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
				            <h2>Web Form Properties</h2>
				        </div>

						<div id="modalwindow">						   
						   <span class="req">*</span>  Required

						   <table class="webform" cellspacing="0" cellpadding="2" border="0">
						      <tbody>
						         <tr>
						            <td class="var">
						               <label for="Title">Title</label><br>
						           </td>
						           <td>
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
						            	<label for="FirstName">First Name <span class="req">*</span></label>
						            </td>
						            <td>
						            	<input type="text" name="FirstName" id="FirstName" class="form-control" > 
						            </td>
						         </tr>
						         <tr>
						            <td>
						            	<label for="LastName">Last Name <span class="req">*</span></label>
						            	
						            	<input type="text" name="LastName" id="LastName" class="form-control" > 
						            </td>
						         </tr>
						         <tr>
						            <td>
						            	<label for="EmailAddress">Email Address <span class="req">*</span></label>
						            	<input type="text" name="EmailAddress" id="EmailAddress" class="form-control"> 
						            </td>
						         </tr>						         
						         
						        
						         <tr>
						            <td>
						            	<input class="btn btn-default" type="submit" value="Submit" id="catwebformbutton" disabled="disabled">
						            </td>
						         </tr>
						      </tbody>
						   </table>
						   <div class="list-btr-top">						       	
						       	<input type="button" id="btnCancel" value="Close" class="btn btn-default">
						    </div>
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
											            	<label for="BillingAddress">Billing Address <span class="req">*</span></label><br>
											            	<input type="text" name="BillingAddress" id="BillingAddress" class="form-control">
											            </td>
											         </tr>
											         <tr>
											            <td>
											            	<label for="BillingCity">City <span class="req">*</span></label><br>
											            	<input type="text" name="BillingCity" id="BillingCity" class="form-control">
											            </td>
											         </tr>
											         <tr>
											            <td>
											            	<label for="BillingState">State <span class="req">*</span></label><br>
											            	<input type="text" name="BillingState" id="BillingState" class="form-control">
											            </td>
											         </tr>
											         <tr>
											            <td>
											            	<label for="BillingZip">Zipcode/Postcode <span class="req">*</span></label><br>
											            	<input type="text" name="BillingZip" id="BillingZip" class="form-control">
											            </td>
											         </tr>
											         <tr>
											            <td>
											               <label for="BillingCountry">Country <span class="req">*</span></label><br>
											               <select name="BillingCountry" id="BillingCountry" class="form-control">
											                  <option value=" ">-- Select Country --</option>
											                  <option value="AF">AFGHANISTAN</option>
											                  <option value="AX">ALAND ISLANDS</option>
											                  <option value="AL">ALBANIA</option>
											                  <option value="DZ">ALGERIA</option>
											                  <option value="AS">AMERICAN SAMOA</option>
											                  <option value="AD">ANDORRA</option>
											                  <option value="AO">ANGOLA</option>
											                  <option value="AI">ANGUILLA</option>
											                  <option value="AQ">ANTARCTICA</option>
											                  <option value="AG">ANTIGUA AND BARBUDA</option>
											                  <option value="AR">ARGENTINA</option>
											                  <option value="AM">ARMENIA</option>
											                  <option value="AW">ARUBA</option>
											                  <option value="AU">AUSTRALIA</option>
											                  <option value="AT">AUSTRIA</option>
											                  <option value="AZ">AZERBAIJAN</option>
											                  <option value="BS">BAHAMAS</option>
											                  <option value="BH">BAHRAIN</option>
											                  <option value="BD">BANGLADESH</option>
											                  <option value="BB">BARBADOS</option>
											                  <option value="BY">BELARUS</option>
											                  <option value="BE">BELGIUM</option>
											                  <option value="BZ">BELIZE</option>
											                  <option value="BJ">BENIN</option>
											                  <option value="BM">BERMUDA</option>
											                  <option value="BT">BHUTAN</option>
											                  <option value="BO">BOLIVIA</option>
											                  <option value="BA">BOSNIA AND HERZEGOVINA</option>
											                  <option value="BW">BOTSWANA</option>
											                  <option value="BV">BOUVET ISLAND</option>
											                  <option value="BR">BRAZIL</option>
											                  <option value="IO">BRITISH INDIAN OCEAN TERRITORY</option>
											                  <option value="BN">BRUNEI DARUSSALAM</option>
											                  <option value="BG">BULGARIA</option>
											                  <option value="BF">BURKINA FASO</option>
											                  <option value="BI">BURUNDI</option>
											                  <option value="KH">CAMBODIA</option>
											                  <option value="CM">CAMEROON</option>
											                  <option value="CA">CANADA</option>
											                  <option value="CV">CAPE VERDE</option>
											                  <option value="KY">CAYMAN ISLANDS</option>
											                  <option value="CF">CENTRAL AFRICAN REPUBLIC</option>
											                  <option value="TD">CHAD</option>
											                  <option value="CL">CHILE</option>
											                  <option value="CN">CHINA</option>
											                  <option value="CX">CHRISTMAS ISLAND</option>
											                  <option value="CC">COCOS (KEELING) ISLANDS</option>
											                  <option value="CO">COLOMBIA</option>
											                  <option value="KM">COMOROS</option>
											                  <option value="CG">CONGO</option>
											                  <option value="CD">CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
											                  <option value="CK">COOK ISLANDS</option>
											                  <option value="CR">COSTA RICA</option>
											                  <option value="CI">CÔTE D'IVOIRE</option>
											                  <option value="HR">CROATIA</option>
											                  <option value="CU">CUBA</option>
											                  <option value="CY">CYPRUS</option>
											                  <option value="CZ">CZECH REPUBLIC</option>
											                  <option value="DK">DENMARK</option>
											                  <option value="DJ">DJIBOUTI</option>
											                  <option value="DM">DOMINICA</option>
											                  <option value="DO">DOMINICAN REPUBLIC</option>
											                  <option value="EC">ECUADOR</option>
											                  <option value="EG">EGYPT</option>
											                  <option value="SV">EL SALVADOR</option>
											                  <option value="GQ">EQUATORIAL GUINEA</option>
											                  <option value="ER">ERITREA</option>
											                  <option value="EE">ESTONIA</option>
											                  <option value="ET">ETHIOPIA</option>
											                  <option value="FK">FALKLAND ISLANDS (MALVINAS)</option>
											                  <option value="FO">FAROE ISLANDS</option>
											                  <option value="FJ">FIJI</option>
											                  <option value="FI">FINLAND</option>
											                  <option value="FR">FRANCE</option>
											                  <option value="GF">FRENCH GUIANA</option>
											                  <option value="PF">FRENCH POLYNESIA</option>
											                  <option value="TF">FRENCH SOUTHERN TERRITORIES</option>
											                  <option value="GA">GABON</option>
											                  <option value="GM">GAMBIA</option>
											                  <option value="GE">GEORGIA</option>
											                  <option value="DE">GERMANY</option>
											                  <option value="GH">GHANA</option>
											                  <option value="GI">GIBRALTAR</option>
											                  <option value="GR">GREECE</option>
											                  <option value="GL">GREENLAND</option>
											                  <option value="GD">GRENADA</option>
											                  <option value="GP">GUADELOUPE</option>
											                  <option value="GU">GUAM</option>
											                  <option value="GT">GUATEMALA</option>
											                  <option value="GG">GUERNSEY</option>
											                  <option value="GN">GUINEA</option>
											                  <option value="GW">GUINEA-BISSAU</option>
											                  <option value="GY">GUYANA</option>
											                  <option value="HT">HAITI</option>
											                  <option value="HM">HEARD ISLAND AND MCDONALD ISLANDS</option>
											                  <option value="VA">HOLY SEE (VATICAN CITY STATE)</option>
											                  <option value="HN">HONDURAS</option>
											                  <option value="HK">HONG KONG</option>
											                  <option value="HU">HUNGARY</option>
											                  <option value="IS">ICELAND</option>
											                  <option value="IN">INDIA</option>
											                  <option value="ID">INDONESIA</option>
											                  <option value="IR">IRAN, ISLAMIC REPUBLIC OF</option>
											                  <option value="IQ">IRAQ</option>
											                  <option value="IE">IRELAND</option>
											                  <option value="IL">ISRAEL</option>
											                  <option value="IT">ITALY</option>
											                  <option value="JM">JAMAICA</option>
											                  <option value="JP">JAPAN</option>
											                  <option value="JE">JERSEY</option>
											                  <option value="JO">JORDAN</option>
											                  <option value="KZ">KAZAKHSTAN</option>
											                  <option value="KE">KENYA</option>
											                  <option value="KI">KIRIBATI</option>
											                  <option value="KP">KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
											                  <option value="KR">KOREA, REPUBLIC OF</option>
											                  <option value="KW">KUWAIT</option>
											                  <option value="KG">KYRGYZSTAN</option>
											                  <option value="LA">LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
											                  <option value="LV">LATVIA</option>
											                  <option value="LB">LEBANON</option>
											                  <option value="LS">LESOTHO</option>
											                  <option value="LR">LIBERIA</option>
											                  <option value="LY">LIBYAN ARAB JAMAHIRIYA</option>
											                  <option value="LI">LIECHTENSTEIN</option>
											                  <option value="LT">LITHUANIA</option>
											                  <option value="LU">LUXEMBOURG</option>
											                  <option value="MO">MACAO</option>
											                  <option value="MK">MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
											                  <option value="MG">MADAGASCAR</option>
											                  <option value="MW">MALAWI</option>
											                  <option value="MY">MALAYSIA</option>
											                  <option value="MV">MALDIVES</option>
											                  <option value="ML">MALI</option>
											                  <option value="MT">MALTA</option>
											                  <option value="MH">MARSHALL ISLANDS</option>
											                  <option value="MQ">MARTINIQUE</option>
											                  <option value="MR">MAURITANIA</option>
											                  <option value="MU">MAURITIUS</option>
											                  <option value="YT">MAYOTTE</option>
											                  <option value="MX">MEXICO</option>
											                  <option value="FM">MICRONESIA, FEDERATED STATES OF</option>
											                  <option value="MD">MOLDOVA, REPUBLIC OF</option>
											                  <option value="MC">MONACO</option>
											                  <option value="MN">MONGOLIA</option>
											                  <option value="ME">MONTENEGRO</option>
											                  <option value="MS">MONTSERRAT</option>
											                  <option value="MA">MOROCCO</option>
											                  <option value="MZ">MOZAMBIQUE</option>
											                  <option value="MM">MYANMAR</option>
											                  <option value="NA">NAMIBIA</option>
											                  <option value="NR">NAURU</option>
											                  <option value="NP">NEPAL</option>
											                  <option value="NL">NETHERLANDS</option>
											                  <option value="AN">NETHERLANDS ANTILLES</option>
											                  <option value="NC">NEW CALEDONIA</option>
											                  <option value="NZ">NEW ZEALAND</option>
											                  <option value="NI">NICARAGUA</option>
											                  <option value="NE">NIGER</option>
											                  <option value="NG">NIGERIA</option>
											                  <option value="NU">NIUE</option>
											                  <option value="NF">NORFOLK ISLAND</option>
											                  <option value="MP">NORTHERN MARIANA ISLANDS</option>
											                  <option value="NO">NORWAY</option>
											                  <option value="OM">OMAN</option>
											                  <option value="PK">PAKISTAN</option>
											                  <option value="PW">PALAU</option>
											                  <option value="PS">PALESTINIAN TERRITORY, OCCUPIED</option>
											                  <option value="PA">PANAMA</option>
											                  <option value="PG">PAPUA NEW GUINEA</option>
											                  <option value="PY">PARAGUAY</option>
											                  <option value="PE">PERU</option>
											                  <option value="PH" selected="selected">PHILIPPINES</option>
											                  <option value="PN">PITCAIRN</option>
											                  <option value="PL">POLAND</option>
											                  <option value="PT">PORTUGAL</option>
											                  <option value="PR">PUERTO RICO</option>
											                  <option value="QA">QATAR</option>
											                  <option value="RE">REUNION</option>
											                  <option value="RO">ROMANIA</option>
											                  <option value="RU">RUSSIAN FEDERATION</option>
											                  <option value="RW">RWANDA</option>
											                  <option value="BL">SAINT BARTHÉLEMY</option>
											                  <option value="SH">SAINT HELENA</option>
											                  <option value="KN">SAINT KITTS AND NEVIS</option>
											                  <option value="LC">SAINT LUCIA</option>
											                  <option value="MF">SAINT MARTIN</option>
											                  <option value="PM">SAINT PIERRE AND MIQUELON</option>
											                  <option value="VC">SAINT VINCENT AND THE GRENADINES</option>
											                  <option value="WS">SAMOA</option>
											                  <option value="SM">SAN MARINO</option>
											                  <option value="ST">SAO TOME AND PRINCIPE</option>
											                  <option value="SA">SAUDI ARABIA</option>
											                  <option value="SN">SENEGAL</option>
											                  <option value="RS">SERBIA</option>
											                  <option value="SC">SEYCHELLES</option>
											                  <option value="SL">SIERRA LEONE</option>
											                  <option value="SG">SINGAPORE</option>
											                  <option value="SK">SLOVAKIA</option>
											                  <option value="SI">SLOVENIA</option>
											                  <option value="SB">SOLOMON ISLANDS</option>
											                  <option value="SO">SOMALIA</option>
											                  <option value="ZA">SOUTH AFRICA</option>
											                  <option value="GS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
											                  <option value="ES">SPAIN</option>
											                  <option value="LK">SRI LANKA</option>
											                  <option value="SD">SUDAN</option>
											                  <option value="SR">SURINAME</option>
											                  <option value="SJ">SVALBARD AND JAN MAYEN</option>
											                  <option value="SZ">SWAZILAND</option>
											                  <option value="SE">SWEDEN</option>
											                  <option value="CH">SWITZERLAND</option>
											                  <option value="SY">SYRIAN ARAB REPUBLIC</option>
											                  <option value="TW">TAIWAN</option>
											                  <option value="TJ">TAJIKISTAN</option>
											                  <option value="TZ">TANZANIA, UNITED REPUBLIC OF</option>
											                  <option value="TH">THAILAND</option>
											                  <option value="TL">TIMOR-LESTE</option>
											                  <option value="TG">TOGO</option>
											                  <option value="TK">TOKELAU</option>
											                  <option value="TO">TONGA</option>
											                  <option value="TT">TRINIDAD AND TOBAGO</option>
											                  <option value="TN">TUNISIA</option>
											                  <option value="TR">TURKEY</option>
											                  <option value="TM">TURKMENISTAN</option>
											                  <option value="TC">TURKS AND CAICOS ISLANDS</option>
											                  <option value="TV">TUVALU</option>
											                  <option value="UG">UGANDA</option>
											                  <option value="UA">UKRAINE</option>
											                  <option value="AE">UNITED ARAB EMIRATES</option>
											                  <option value="GB">UNITED KINGDOM</option>
											                  <option value="US">UNITED STATES</option>
											                  <option value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
											                  <option value="UY">URUGUAY</option>
											                  <option value="UZ">UZBEKISTAN</option>
											                  <option value="VU">VANUATU</option>
											                  <option value="VE">VENEZUELA</option>
											                  <option value="VN">VIETNAM</option>
											                  <option value="VG">VIRGIN ISLANDS, BRITISH</option>
											                  <option value="VI">VIRGIN ISLANDS, U.S.</option>
											                  <option value="WF">WALLIS AND FUTUNA</option>
											                  <option value="EH">WESTERN SAHARA</option>
											                  <option value="YE">YEMEN</option>
											                  <option value="ZM">ZAMBIA</option>
											                  <option value="ZW">ZIMBABWE</option>
											               </select>
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



	        </div>






@endsection

