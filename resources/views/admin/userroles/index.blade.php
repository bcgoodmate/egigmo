@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>User Roles</h2>
	        </div>
			
			<br>

	        <div class="btn-add">
		        <ul>
		            <li><a id="" class="" href="/admin/userroles-create-details">New Role</a></li>
		        </ul>
		    </div>


	        <div class="table-main">
	            <table id="table-anchor" class="display" style="width:100%">
	                <thead>
	                    <tr class="">                                    
	                        <th>Role</th>
	                        <th>Actions</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr>
	                        <td>Administrators</td>
	                        <td><a href="/admin/userroles-edit-details" class="blue">Edit</a></td>
	                    </tr>
	                    <tr>
	                        <td>Users</td>
	                        <td><a href="/admin/userroles-edit-details" class="blue">Edit</a></td>
	                    </tr>                    
	                   
	                </tbody>
	               
	            </table>
	        </div>
	    	
    	
@endsection

