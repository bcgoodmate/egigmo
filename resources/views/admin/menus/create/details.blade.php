@extends('layouts.admin')

@section('content')

	   	<div class="row">
	   		<div class="col-sm-8">
		        <div class="list-btr">
		            <h2>Content Holders</h2>
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
				   <div class="btn-group">
					  <button type="button" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Default <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a class="popup-edit" href="#contentholder-add">Default</a></li>
					    <li><a class="popup-edit" href="#contentholder-audit">CSS</a></li>
					    <li><a class="popup-edit" href="#contentholder-audit">CSS (HTML only)</a></li>
					  </ul>
					</div>
				</div>		

		    	<hr>
		       
		       	<input type="button" id="" value="Save" class="btn btn-default">
		       	<input type="button" id="" value="Cancel" class="btn btn-default">
		       	<input type="button" id="" value="Next" class="btn btn-primary btn-default">
			   
			   </div>
			</div>

    	
@endsection

