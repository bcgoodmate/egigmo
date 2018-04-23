@extends('layouts.admin')

@section('content')

	   	<div class="row">
	   		<div class="col-sm-8">
		        <div class="list-btr">
		            <h2>Admin Users</h2>
		            <h5><em>Invite Admin User</em></h5>
		        </div>

				<br>      
				
				<div class="form-group">
				    <label for="name">Sign-In Email Address:</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>

			    <div class="form-group">
				    <label for="name">First Name:</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>		

			    <div class="form-group">
				    <label for="name">Last Name:</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>

			    <div class="form-group">
				    <label for="name">Cell Number:</label>
				    <input type="text" name="name" id="name" class="form-control" value="" placeholder="optional">
			    </div>	

			    <br>

			    <h3><b>Role on Current Site</b></h3>	
			    <hr>


			    <div class="form-group">
				    <label for="name">User Roles:</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>	
				
		    	<hr>
		       
		       	<input type="button" id="" value="Invite" class="btn btn-primary btn-default">
		       	<input type="button" id="" value="Cancel" class="btn btn-default">
			   
			   </div>
			</div>

    	
@endsection

