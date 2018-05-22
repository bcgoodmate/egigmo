@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>Content Holders</h2>
	        </div>
			
			<br>

	        <div class="btn-add">
		        <ul>
		            <li><a id="" class="" href="/admin/contentholders-create">Add Content Holder</a></li>
		        </ul>
		    </div>


	        <div class="table-main">
	            <table id="table-anchor" class="display" style="width:100%">
	                <thead>
	                    <tr class="">                                    
	                        <th>Name</th>
	                        <th>Enabled</th>
	                        <th>Actions</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr>
	                        <td><a href="/admin/contentholders-edit">Booking Form</a></td>
	                        <td>Yes</td>
	                        <td><a href="/admin/contentholders-edit">Edit</a></td>
	                                                                                     
	                    </tr>
	                    <tr>
	                        <td><a href="/admin/contentholders-edit">Booking Form</a></td>
	                        <td>Yes</td>
	                        <td><a href="/admin/contentholders-edit">Edit</a></td>
	                                                                                     
	                    </tr>                    
	                   
	                </tbody>
	               
	            </table>
	        </div>
	    	
    	
@endsection

