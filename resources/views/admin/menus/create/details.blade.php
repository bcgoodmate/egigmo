@extends('layouts.admin')

@section('content')
		
		<div class="card-header"><h1>New Menus</h1></div>
		<div class="list-view">
	        <ul>
	            <li class="active"><a href="#"> Details</a></li>
	            <li><a href="/admin/menus-create-menu">Menu Items</a></li>
	            <li><a href="/admin/menus-create-menulook">Menu look</a></li>
	            <li><a href="/admin/menus-create-itemslook">Items look</a></li>
	        </ul>
	    </div>
	   	<div class="row">
	   		<div class="col-inner-deep">				
			    <div class="row form-group">
			        <div class="col-sm-4 text-right">
			            <label>Page Name</label>
			        </div>
			        <div class="col-sm-8 ">
                        <input type="text" name="name" id="name" class="form-control" value="">      
                	</div>
			    </div>
			    <div class="row form-group">
			        <div class="col-sm-4 text-right">
			            <label>Menu Type:</label>			
			        </div>
			        <div class="col-sm-8 ">
                        <select class="">
							<option>Default</option>
							<option>CSS</option>
							<option>CSS (HTML only)</option>
						</select>   
                	</div>
			    </div>
			</div>
	    	<div class="button-wrapper">
		       	<input type="button" id="" value="Save" class="btn btn-default">
		       	<input type="button" id="" value="Cancel" class="btn btn-default">
		       	<input type="button" id="" value="Next" class="btn btn-primary btn-default">
		    </div>			   
		</div>

    	
@endsection

