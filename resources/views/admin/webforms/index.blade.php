@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>Web Forms</h2>
	        </div>
			
			<br>

	        <div class="btn-add">
		        <ul>
		            <li><a id="" class="" href="{{route('admin.webform.create')}}">Add Web Form</a></li>
		        </ul>
		    </div>


	        <div class="table-main">
	            <table id="table-anchor" class="display" style="width:100%">
	                <thead>
	                    <tr class="">                                    
	                        <th>WebForm Name</th>
	                        <th>Actions</th>	
	                    </tr>
	                </thead>
	                <tbody>

	                    <tr>
	                        <td>Booking Form</td>
	                        <td><a href="#" class="blue">edit</a></td>
	                                                                                     
	                    </tr>

	                    <tr>
	                        <td>Buyer Registration</td>
	                        <td><a href="#" class="blue">edit</a></td>
	                                                                                     
	                    </tr>	                                      
	                   
	                </tbody>
	               
	            </table>
	        </div>
	    	
    	
@endsection

