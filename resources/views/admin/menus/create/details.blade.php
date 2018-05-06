@extends('layouts.admin')

@section('content')

	   	<div class="row">
	   		<div class="col-inner">
		        <div class="list-btr">
		            <h2>Menus</h2>
		        </div>	

				<div class="list-view">
			        <ul>
			            <li class="active"><a href="#"> Details</a></li>
			            <li><a href="/admin/menus-create-menu">Menu Items</a></li>
			            <li><a href="/admin/menus-create-menulook">Menu look</a></li>
			            <li><a href="/admin/menus-create-itemslook">Items look</a></li>
			        </ul>
			    </div>
				
				<div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>

			    <div class="form-group">
			    	<label>Menu Type:</label>				   
					<select class="form-control">
						<option>Default</option>
						<option>CSS</option>
						<option>CSS (HTML only)</option>
					</select>
				</div>		

		    	<hr>
		       
		       	<input type="button" id="" value="Save" class="btn btn-default">
		       	<input type="button" id="" value="Cancel" class="btn btn-default">
		       	<input type="button" id="" value="Next" class="btn btn-primary btn-default">
			   
			   </div>
			</div>

    	
@endsection

