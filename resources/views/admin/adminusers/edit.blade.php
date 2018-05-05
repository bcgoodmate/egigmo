@extends('layouts.admin')

@section('content')

	   	<div class="row">
	   		<div class="col-inner">
		        <div class="list-btr">
		            <h2>Admin Users</h2>
		            <h5><em>Edit Admin User</em></h5>
		        </div>
				
				<br>

				
			    <div class="form-group">
					<div class="row">
						<div class="col-sm-4">
					    	<label for="name">Sign-In Email Address:</label>
					    </div>
					    <div class="col-sm-8">
					    	<span>Roladpea@gmail.com</span><span> <a href="#" class="blue">Send password recovery email</a></span>
					    </div>
					</div>
			    </div>

			    <div class="form-group">
					<div class="row">
						<div class="col-sm-4">
					    	<label for="name">First Name:</label>
					    </div>
					    <div class="col-sm-8">
					    	<span>jumanr</span>
					    </div>
					</div>
			    </div>

			    <div class="form-group">
					<div class="row">
						<div class="col-sm-4">
					    	<label for="name">Last Name:</label>
					    </div>
					    <div class="col-sm-8">
					    	<span>Roltpop</span>
					    </div>
					</div>
			    </div>

			    <div class="form-group">
					<div class="row">
						<div class="col-sm-4">
					    	<label for="name">Cell Number:</label>
					    </div>
					    <div class="col-sm-8">
					    	<span>05413671</span>
					    </div>
					</div>
			    </div>

			    <br>

			    <h3><b>Role on Current Site</b></h3>	
			    <hr>


			    <div class="form-group">
				    <label for="name">User Roles:</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>	
				
		    	<hr>
		       
		       	<input type="button" id="" value="Save" class="btn btn-primary btn-default">
		       	<input type="button" id="" value="Cancel" class="btn btn-default">
			   
			   </div>
			</div>

    	
@endsection

