@extends('layouts.admin')

@section('content')		

    <div class="list-btr">
        <h2>System E-mails</h2>
    </div>		        			
	<div class="row">
   		<div class="">	   	
   			<div class="hybridFormHeader">
			    <h2 class="hybridFormTitlewrap">
			        System Email Details
			    </h2>
			</div> 
			<div class="col-inner-menus">
			    <div class="row form-group">
			    	<div class="col-md-4 text-right">
				    	<label for="name">Email From Address:</label>
				    </div>
				    <div class="col-md-8">
				    	<input type="" name="" class="form-control">
				    </div>
			    </div>
			    <div class="row form-group">
			    	<div class="col-md-4 text-right">
				    	<label for="name">Email Subject:</label>
				    </div>
				    <div class="col-md-8">
				    	<input type="" name="" class="form-control">
				    </div>
			    </div>
			    <div class="row form-group">
			    	<div class="col-md-4 text-right">
				    	<label for="name">Format:</label>
				    </div>
				    <div class="col-md-8">
					    <select name="" id="" class="">
							<option selected="selected">HTML</option>
							<option>text</option>
						</select>
					</div>
			    </div>
			    <div class="row form-group">
			    	<div class="col-md-4 text-right">
				    	<label for="name">Template:</label>
				    </div>
				    <div class="col-md-8">
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
			    </div>
			</div>
			<br>
			<div class="hybridFormHeader">
			    <h2 class="hybridFormTitlewrap">
			        System Email Content
			    </h2>
			</div> 
			<div class="form-group">
				<textarea name="page_body" cols="30" rows="10" class="rich_editor form-control" id="page_body"></textarea>
			</div>
	    	<div class="button-wrapper">		       
		       	<input type="button" id="" value="Save" class="btn btn-primary">
		       	<input type="button" id="" value="Restore to Default" class="btn btn-default">
		    </div>
		</div>
	</div> 
	
@endsection

