@extends('layouts.admin')

@section('content')

	<div class="row">
		<div class="col-inner">
	        <div class="list-btr">
	            <h2>User Roles</h2>
	            <h5><em>New Role</em></h5>
	        </div>

	        <div class="list-view">
		        <ul>
		            <li><a href="/admin/userroles-create-details"> 1. Details </a></li>
		            <li><a href="/admin/userroles-create-users">2. Users</a></li>
		            <li class="active"><a href="/admin/userroles-create-permission">3. Permissions</a></li>
		        </ul>
		    </div>



			<h3><b>Assign Permissions to Role by Moving Permissions to the Right</b></h3>
			<hr>

			<div class="form-group">
				<textarea cols="50" rows="10"></textarea>
			</div>

			<hr>
			<input type="button" id="" value="Back" class="btn btn-default">
			<input type="button" id="" value="Save" class="btn btn-primary btn-default">

		</div>
	</div>
	    	
    	
@endsection

