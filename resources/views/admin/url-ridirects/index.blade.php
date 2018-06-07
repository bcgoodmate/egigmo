@extends('layouts.admin')

@section('content')	   	
	        <div class="list-btr">
	            <h2>URL Redirects</h2>
	        </div>
			<br>
	        <div class="btn-add">
		        <ul>
		            <li><a id="" class="popup-edit" href="#chooseweb">New URL Redirect</a></li>
		            <li><a id="" class="" href="/admin/url-ridirects-import">Import URL Redirects</a></li>
		        </ul>
		    </div>
		   	<div class="warning-row">
		        <div class="warningMessage">
		        	<span>There are no URL Redirects. To add a URL Redirect, click on "New URL Redirect"</span>
	        	</div>
	        </div>
	        <br>
			<div class="mfp-hide popup-content-wrapper" id="chooseweb">
				<div class="list-btr">
				    <h2>New URL Redirect</h2>
				</div>
		        <div class="modalwindow">
					<div class="hybridFormHeader">
					    <h2 class="hybridFormTitlewrap">
					       Source Url
					    </h2>
					</div>
	        		<form id="" action="">	
	        			<div class="row form-group">
	        				<div class="col-md-3 text-right">
						    	<label for="name">Folder:</label>
						    </div>
						    <div class="col-md-6">
							    <select name="folder" class="form-control ">
				                    <option value="">/</option>
				                   	<option value="/template">/template</option>
				                    <option value="/_source">/_source</option>
				                    <option value="/_source/css">/_source/css</option>
	                            </select>
	                        </div>
					    </div>
					    <div class="row form-group">
					    	<div class="col-md-3 text-right">
						    	<label for="name">File Name:</label>
						    </div>
						    <div class="col-md-6">
						    	<input type="text" name="name" id="name" class="form-control" value="">
						    </div>
					    </div>
					    <div class="row form-group">
					    	<div class="col-md-3 text-right">
						    	<label for="name">URL:</label>
						    </div>
						    <div class="col-md-6">
						    	<a href="#">http://egigmo.businesscatalyst.com/</a>
						    </div>
					    </div>
					    <div class="hybridFormHeader">
						    <h2 class="hybridFormTitlewrap">
						       Source Url
						    </h2>
						</div>
					    <div class="row form-group">
					    	<div class="col-md-3 text-right">
						    	<label for="name">Modules:</label>
						    </div>
						    <div class="col-md-6">
							    <select name="folder" class="form-control ">
				                    <option value="">Web Pages</option>
				                    <option value="">News</option>
				                   	<option value="">Media Downloads</option>
				                    <option value="">FAQs</option>
				                    <option value="">Events</option>
	                            </select>
	                        </div>
					    </div>
					    <div class="row form-group">
					    	<div class="col-md-3 text-right">
						    	<label for="name">Select Web Page</label>
						    </div>
						    <div class="col-md-6">
						    	<input type="text" name="name" id="name" class="form-control" value="">
						    </div>
					    </div>
					    <div class="inline">
						    <ul>
						    	<li><a href="#" class="blue">Web Pages</a></li><span>/</span>
						    	<li><a href="#" class="blue">News</a></li><span>/</span>
						    	<li><a href="#" class="blue">FAQs</a></li><span>/</span>
						    	<li><a href="#" class="blue">Media Downloads</a></li><span>/</span>
						    	<li><a href="#" class="blue">Catalogs</a></li><span>/</span>
						    	<li><a href="#" class="blue">Forums</a></li><span>/</span>
						    	<li><a href="#" class="blue">Blogs</a></li><span>/</span>
						    	<li><a href="#" class="blue">Events</a></li><span>/</span>
						    	<li><a href="#" class="blue">RSS Channels</a></li><span>/</span>
						    	<li><a href="#" class="blue">Web Apps</a></li>
						    </ul>
						</div>
						<div class="hybridFormHeader">
						    <h2 class="hybridFormTitlewrap">
						       Options
						    </h2>
						</div>
					    <div class="row form-group">
					    	<div class="col-md-3 text-right">
						    	<label for="name">Enabled</label>
						    </div>
						    <div class="col-md-6">
						    	<input type="checkbox" name="name" id="name" class="" value="">
						    </div>
					    </div>
	        			<div class="footerbuttons">
	        				<hr>
	        				<input type="button" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">
	        			</div>	
					</form>
				</div>
			</div>

	       
    	
@endsection

