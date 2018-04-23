@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>Menus</h2>
	        </div>
			
			<br>

	        <div class="btn-add">
		        <ul>
		            <li><a id="" class="" href="/admin/menus-create-details">Add Menu</a></li>
		        </ul>
		    </div>


	        <div class="table-main">
	            <table id="table-anchor" class="display" style="width:100%">
	                <thead>
	                    <tr class="">                                    
	                        <th>Name</th>
	                        <th>Actions</th>	                        
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr>
	                        <td>Booking Form</td>
	                        <td><a href="/admin/menus-edit-menu" class="blue">Edit</a></td>	                                                                                     
	                    </tr>

	                    <tr>
	                         <td>Booking Form</td>
	                        <td><a href="/admin/menus-edit-menu" class="blue">Edit</a></td>	    
	                                                                                     
	                    </tr>

	                    <tr>
	                        <td>Booking Form</td>
	                        <td><a href="/admin/menus-edit-menu" class="blue">Edit</a></td>	                                           
	                    </tr>
	                    
	                   
	                </tbody>
	               
	            </table>
	        </div>
	    	
    	
@endsection

