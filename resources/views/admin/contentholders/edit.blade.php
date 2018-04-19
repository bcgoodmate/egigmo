@extends('layouts.admin')

@section('content')
		

		<div class="row">
	   		<div class="col-sm-8">
	   	
		        <div class="list-btr">
		            <h2>Content Holders</h2>
		        </div>				
				<br>

		        <div class="btn-add">
			        <ul>
			            <li>
			            	<div class="btn-group">
							  <button type="button" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Actions <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a class="popup-edit" href="#contentholder-add">Add Content Holder to a Web Page</a></li>
							    <li><a class="popup-edit" href="#contentholder-audit">View Audit Log</a></li>
							  </ul>
							</div>
						</li>
			        </ul>
			    </div>

				<hr>

			    <h3><b>Content Holder Details</b></h3>	
			    <br>  

			    <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>

			    <div class="form-group">
				    <label for="default_template">
				    	<input type="checkbox" id="" value="1" name="">
				        Enabled:
				    </label>
				</div>

				<hr>

				<h3><b>Content Holder Content</b></h3>
				<br>

				<textarea name="page_body" cols="30" rows="10" class="rich_editor form-control" id="page_body"></textarea>

		    	<hr>
		       
		       	<input type="button" id="" value="Update" class="btn btn-primary btn-default">
		       	<input type="button" id="" value="Cancel" class="btn btn-default">

			</div>
		</div>


		<div class="webform-popup">

        	<div class="mfp-hide" id="contentholder-add">

        		<div class="popup-content-wrapper">

	        	
		        	<div class="list-btr">
			            <h2>Web Form Properties</h2>
			        </div>

		        	<div class="modalwindow">

		        		<form id="" action="">									
							

							<div class="form-group">
							    <label for="default_template">
							    	<input type="checkbox" id="" value="1" name="">
							        Option:
							    </label>
							</div>



							<hr>
					       	<input type="button" id="btnCancel" value="Close" class="btn btn-default">							  

						</form>

					</div>
				</div>
			</div>


		</div>


		<div class="webform-popup">

        	<div class="mfp-hide" id="#contentholder-add">

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

			<div class="mfp-hide" id="contentholder-audit">

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

