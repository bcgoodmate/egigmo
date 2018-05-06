@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>Site Domains</h2>
	        </div>
			
			<br>

			<div class="btn-add">
		        <ul>
		            <li><a id="" class="popup-edit" href="#edit-prop">New Domain</a></li>
		        </ul>
		    </div>


			<h3><b>Domains</b></h3>

			<hr>

			 <div class="table-main">
	            <table id="table-anchor" class="display" style="width:100%">
	                <thead>
	                    <tr class="">                                    
	                        <th>Name</th>
	                        <th>Start Page/Domain Forwarding</th>
	                        <th>Country</th>
	                        <th>Culture</th>
	                        <th>DNS</th>
	                        <th>SSL</th>
	                        <th>Actions</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr>
	                        <td>egigmo.businesscatalyst.com (system)</td>
	                        <td>Start Page - eGigMo - Local Gigs Marketplace</td>
	                        <td>Philippines</td>
	                        <td></td>
	                        <td>This Service</td>
	                        <td>Active</td>
	                        <td><a href="#edit-prop" class="blue popup-edit">Edit</a></td>
	                                                                                     
	                    </tr>
	                                 
	                   
	                </tbody>
	               
	            </table>
	        </div>
			

			<hr>

	        <div class="tab-wrapper">
	        	<div class="tab-row">
	        		<i class="icon-drop"></i>
	        		<a href="#"><h3><b>A Records</b></h3></a>
	        		<div class="warningMessage">You have not added any hostname (A) records</div>
	        	</div>
	        	<hr>
	        	<div class="tab-row">
	        		<i class="icon-drop"></i>
	        		<a href="#"><h3><b>CNAME Records (Alias)</b></h3></a>
	        		<div class="warningMessage">You have not added any alias (CNAME) records</div>
	        	</div>
	        	<hr>
	        	<div class="tab-row">
	        		<i class="icon-drop"></i>
	        		<a href="#"><h3><b>MX Records (Mail)</b></h3></a>
	        		<div class="warningMessage">You have not added any mail exchanger (MX) records</div>
	        	</div>
	        	<hr>
	        	<div class="tab-row">
	        		<i class="icon-drop"></i>
	        		<a href="#"><h3><b>Advanced DNS Records</b></h3></a>
	        		<div class="warningMessage">You have not added any advanced DNS records</div>
	        	</div>
	        	<hr>
	        </div>


	        <div class="mfp-hide popup-content-wrapper" id="edit-prop">

		        		<div class="">

			        	
				        	<div class="list-btr">
					            <h2>Associate Existing Domain</h2>
					        </div>

				        	<div class="modalwindow">

			        		<form id="" action="http://localhost:8080/admin/webformscreate">	        		

								<div class="form-group">
								    <div class="row">
								    	<div class="col-sm-4">
								    		<label for="name">Domain</label>
								    	</div>
								    	<div class="col-sm-8">
								    		<input type="text" name="name" id="name" class="form-control" value="">
								    		<p>Enter the name of a domain or subdomain that you have already purchased and configured from a registrar.</p>
								    		<a href="#" class="blue">read more</a>
								    	</div>
								    </div>
							    </div>

						       	<div class="tab-wrapper">
						        	<div class="tab-row">
						        		<i class="icon-drop"></i>
						        		<a href="#"><h3><b>A Records</b></h3><span class="icon-dropdown"></span></a>
						        		<div class="">
						        			<div class="rad-wrapper">
										         <div class="form-group">
										         	<div class="row">
													    <div class="col-sm-4">						
										            		<label for="name">Host with this service?:</label>
										            	</div>
										            	<div class="col-sm-8">
												            <input type="radio" name="name" id="" class="choice" value="" href="#rad-allroot" checked>Recommended: Use this service to host your website requiring you to re-delegate the domain
												            <input type="radio" name="name" id="" class="choice" value="" href="#rad-sub142">Use an external DNS server 
												        </div>
												    </div>
										         </div>
										         <hr>

										        <div class="rad-main open" id="rad-allroot">	
										        	<div class="form-group" id="">
										        		<div class="row">
													    	<div class="col-sm-4">
													    		<label for="name">Email:</label>
													    	</div>
													    	<div class="col-sm-8">
													    		<input type="radio" name="name02" id="" class="" value="" checked="">Recommended: Use this service for email as well as for hosting the custom domain
												            	<input type="radio" name="name02" id="" class="" value="" >Use your Google Apps account for email
												            	<input type="radio" name="name02" id="" class="" value="" >Use another external service for email
												            	<input type="radio" name="name02" id="" class="" value="" >Do not use email for this domain
													    	</div>
													    </div>
										            </div>  
										            <div class="form-group" id="">
										            	<div class="row">
													    	<div class="col-sm-4">
										               			<label for="name">Use WWW in URL?:</label>
										               		</div>
										               		<div class="col-sm-8">
										               			<select class="form-control">
										               				<option>Recommended: Always show WWW in the address bar</option>
										               				<option>Allow but never show WWW in the address bar</option>
										               				<option>Always show URL as entered by the user</option>
										               				<option>Never allow WWW in the URL</option>
										               			</select>
										               		</div>
										               	</div>
										            </div>
										            <div class="form-group" id="">
										            	<div class="row">
													    	<div class="col-sm-4">
										               			<label for="name">Default URL:</label>
										               		</div>
										               		<div class="col-sm-8">
										               			<input type="checkbox" name="">
										               		</div>
										               	</div>
										            </div>
										            <div class="form-group" id="">
										            	<div class="row">
													    	<div class="col-sm-4">
										               			<label for="name">Default Email Domain:</label>
										               		</div>
										               		<div class="col-sm-8">
										               			<input type="checkbox" name="">
										               		</div>
										               	</div>
										            </div>
										        </div>
										        <div class="rad-main" id="rad-sub142">		            
										            <div class="form-group" id="">
										            	<div class="row">
													    	<div class="col-sm-4">
										               			<label for="name">Use WWW in URL?:</label>
										               		</div>
										               		<div class="col-sm-8">
										               			<select class="form-control">
										               				<option>Recommended: Always show WWW in the address bar</option>
										               				<option>Allow but never show WWW in the address bar</option>
										               				<option>Always show URL as entered by the user</option>
										               				<option>Never allow WWW in the URL</option>
										               			</select>
										               		</div>
										               	</div>
										            </div>
										            <div class="form-group" id="">
										            	<div class="row">
													    	<div class="col-sm-4">
										               			<label for="name">Default URL:</label>
										               		</div>
										               		<div class="col-sm-8">
										               			<input type="checkbox" name="">
										               		</div>
										               	</div>
										            </div>

										        </div>
										         
										         
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

