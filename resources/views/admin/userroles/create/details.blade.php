@extends('layouts.admin')

@section('content')

	<div class="row">
		<div class="col-sm-8">
	        <div class="list-btr">
	            <h2>User Roles</h2>
	            <h5><em>New Role</em></h5>
	        </div>

	        <div class="list-view">
		        <ul>
		            <li class="active"><a href="/admin/userroles-create-details"> 1. Details </a></li>
		            <li><a href="/admin/userroles-create-users">2. Users</a></li>
		            <li><a href="/admin/userroles-create-permission">3. Permissions</a></li>
		        </ul>
		    </div>


			<div class="form-group">
				<label for="name">Role Title:</label>
				<input type="text" name="name" id="name" class="form-control" value="">
			</div>

			<hr>
			<input type="button" id="" value="Cancel" class="btn btn-default">
			<input type="button" id="" value="Next" class="btn btn-primary btn-default">

		</div>
	</div>
	    	
    	
@endsection

