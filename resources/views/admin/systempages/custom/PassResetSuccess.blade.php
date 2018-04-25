@extends('layouts.admin')

@section('content')
		

		<div class="row">
	   		<div class="col-sm-8">
	   	
		        <div class="list-btr">
		            <h2>System Pages</h2>
		          
		            <h5><em>Title Page Name</em></h5>
		        </div>	
		        			
				<br>	

			    <h3><b>System Message Template</b></h3>	
			    <br>  

			    <div class="form-group">
				    <label for="name">Country to configure system message for:</label>
				    <select name="" id="" class="form-control">
						<option selected="selected">PHILIPPINES</option>
						<option>Add and assign a domain to another country in order to setup more countries</option>
					</select>
			    </div>

			    <div class="form-group">
				    <label for="name">Template:</label>
				    <div class="row">
				    	<div class="col-sm-8">
						    <select name="" id="" class="form-control">
								<option value="">Don't use a template</option>
								<option selected="selected" value="">Use default template</option>
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
						</div>
						<div class="col-sm-4">
							<a href="#">preview</a>
						</div>
					</div>
			    </div>

				<hr>

				<h3><b>System Message Content</b></h3>
				<br>

				<textarea name="page_body" cols="30" rows="10" class="rich_editor form-control" id="page_body"></textarea>

		    	<hr>
		       
		       	<input type="button" id="" value="Save" class="btn btn-primary">
		       	<input type="button" id="" value="Restore to Default" class="btn btn-default">

			</div>
		</div>	 	
    	
@endsection

