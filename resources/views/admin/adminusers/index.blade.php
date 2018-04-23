@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>Admin Users</h2>
	        </div>
			
			<br>

	        <div class="btn-add">
		        <ul>
		            <li><a id="" class="" href="/admin/adminusers-invite">Invite Admin User</a></li>
		        </ul>
		    </div>


	        <div class="table-main">
	            <table id="table-anchor" class="display" style="width:100%">
	                <thead>
	                    <tr class="">                                    
	                        <th>Name</th>
	                        <th>Email</th>
	                        <th>Roles</th>
	                        <th>Actions</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr>
	                        <td>Jamesy Roladpea</td>
	                        <td>Roladpea@gmail.com</td>
	                        <td>AdministratorsUsers</td>
	                        <td>
	                        	<a href="/admin/adminusers-edit" class="blue">Edit</a>
	                        </td>
	                                                                                     
	                    </tr>
	                    <tr>
	                       <td>Jqheusgua Goepl</td>
	                        <td>Roladpea@gmail.com</td>
	                        <td>AdministratorsUsers</td>
	                        <td>
	                        	<a href="/admin/adminusers-edit" class="blue">Edit</a>
	                        	<a href="#custom-form" class="popup-edit blue">Remove</a>
	                        </td>
	                                                                                     
	                    </tr>                    
	                   
	                </tbody>
	               
	            </table>
	        </div>


	        <div class="mfp-hide popup-content-wrapper" id="custom-form">

        		<div class="">
	        	
		        	<div class="list-btr">
			            <h2>Remove Admin User</h2>
			        </div>

			       <div class="modalwindow">
		        			
						<div class="form-group">
						    <p>Are you sure you want to remove the Admin User juvan capilitan - Roladpea@gmail.com from this site?</p>
						    <p>The user will no longer be able to login to the Admin interface.</p>
					    </div>


	        			<hr>
						<input type="button" id="btnSaveForm" value="Remove" class="btn btn-primary btn-default">

					</div>

				</div>		

			</div>
	    	
    	
@endsection

