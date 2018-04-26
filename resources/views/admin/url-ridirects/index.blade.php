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


			<div class="mfp-hide popup-content-wrapper" id="chooseweb">
		        	
		        <h2>New URL Redirect</h2>
		       	<hr>

		       	<h3><b>Source Url</b></h3>

		        <div class="modalwindow">

	        		<form id="" action="">	

	        			<div class="form-group">
						    <label for="name">Folder:</label>
						    <select name="folder" class="form-control ">
			                    <option value="">/</option>
			                   	<option value="/template">/template</option>
			                    <option value="/_source">/_source</option>
			                    <option value="/_source/css">/_source/css</option>
                            </select>
					    </div>

					    <div class="form-group">
						    <label for="name">File Name:</label>
						    <input type="text" name="name" id="name" class="form-control" value="">
					    </div>

					    <div class="form-group">
						    <label for="name">URL:</label>
						    <a href="#"></a>
					    </div>

					    <h3><b>Source Url</b></h3>

					    <hr>

					    <div class="form-group">
						    <label for="name">Modules:</label>
						    <select name="folder" class="form-control ">
			                    <option value="">Web Pages</option>
			                    <option value="">News</option>
			                   	<option value="">Media Downloads</option>
			                    <option value="">FAQs</option>
			                    <option value="">Events</option>
                            </select>
					    </div>

					    <div class="form-group">
						    <label for="name">Select Web Page</label>
						    <input type="text" name="name" id="name" class="form-control" value="">
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

					    <h3><b>Source Url</b></h3>

					    <hr>

					    <div class="form-group">
						    <label for="name">Enabled</label>
						    <input type="checkbox" name="name" id="name" class="" value="">
					    </div>

	        			<hr>


	        			<input type="button" id="btnSaveForm" value="Save" class="btn btn-primary btn-default">					   

					</form>
				</div>
			</div>

	       
    	
@endsection

