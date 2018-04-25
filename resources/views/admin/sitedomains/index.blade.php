@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>Site Domains</h2>
	        </div>
			
			<br>


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
	        		<a href="#"><h3><b>A Records</b></h3></a>
	        		<div class="warningMessage">You have not added any hostname (A) records</div>
	        	</div>
	        	<hr>
	        	<div class="tab-row">
	        		<a href="#"><h3><b>CNAME Records (Alias)</b></h3></a>
	        		<div class="warningMessage">You have not added any alias (CNAME) records</div>
	        	</div>
	        	<hr>
	        	<div class="tab-row">
	        		<a href="#"><h3><b>MX Records (Mail)</b></h3></a>
	        		<div class="warningMessage">You have not added any mail exchanger (MX) records</div>
	        	</div>
	        	<hr>
	        	<div class="tab-row">
	        		<a href="#"><h3><b>Advanced DNS Records</b></h3></a>
	        		<div class="warningMessage">You have not added any advanced DNS records</div>
	        	</div>
	        	<hr>
	        </div>


	        <div class="mfp-hide popup-content-wrapper" id="edit-prop">

		        		<div class="">

			        	
				        	<div class="list-btr">
					            <h2>Edit System / Secure Url</h2>
					        </div>

				        	<div class="modalwindow">

			        		<form id="" action="http://localhost:8080/admin/webformscreate">	        		

								<div class="form-group">
								    <div class="row">
								    	<div class="col-sm-4">
								    		<label for="name">URL:</label>
								    	</div>
								    	<div class="col-sm-8">
								    		<input type="text" name="name" id="name" class="form-control" value="">
								    	</div>
								    </div>
							    </div>

							    <div class="form-group">
								    <div class="row">
								    	<div class="col-sm-4">
								    		<label for="name">Home Page:</label>
								    	</div>
								    	<div class="col-sm-8">
								    		<select name="" id="" class="form-control">
								               <option value="">Dashboard Edit Add Embedded Video</option>
								               <option value="">Dashboard Edit Additional Categories</option>
								               <option value="">Dashboard Edit Booking Terms - Additional Terms</option>
								               <option value="">Dashboard Inbox Leads</option>
								               <option value="">Dashboard Inbox Soup</option>
								            </select>
								    	</div>
								    </div>
							    </div>

							    <div class="form-group">
								    <div class="row">
								    	<div class="col-sm-4">
								    		<label for="name">Country:</label>
								    	</div>
								    	<div class="col-sm-8">
								    		<select name="uc$" id="" class="form-control">
								               <option selected="selected" value="-1">Philippines</option>
								               <option value="">BRUNEI DARUSSALAM</option>
								               <option value="">FINLAND</option>
								               <option value="">FINLAND</option>
								               <option value="">FINLAND</option>
								            </select>
								    	</div>
								    </div>
							    </div>

							    <div class="form-group">
								    <div class="row">
								    	<div class="col-sm-4">
								    		<label for="name">Culture:</label>
								    	</div>
								    	<div class="col-sm-8">
								    		<select name="uc$" id="" class="form-control">
								               <option selected="selected" value="-1">English (Philippines)</option>
								               <option value="">English (Singapore)</option>
								               <option value="">English (United States)</option>
								               <option value="">English (South Africa)</option>
								            </select>
								    	</div>
								    </div>
							    </div>

							    <div class="form-group">
								    <div class="row">
								    	<div class="col-sm-4">
								    		<label for="name">SSL:	<span>Active</span></label>
								    	</div>
								    	<div class="col-sm-8">
								    		<input type="checkbox" name=""><span>Always show https in the address bar</span>
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

