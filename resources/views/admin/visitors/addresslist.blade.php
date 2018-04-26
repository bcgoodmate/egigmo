@extends('layouts.admin')

@section('content')

	   	
	        <div class="list-btr">
	            <h2>Visitors</h2>
	        </div>

			<div class="list-view">
		        <ul>
		            <li class="active"><a href="/admin/visitors-overview">Overview</a></li>
		            <li><a href="#">Visits and Page Views</a></li>
		            <li><a href="#">Geographic Location</a></li>
		            <li><a href="#">Unique Visitors</a></li>
		            <li><a href="#">Visitor Loyalty</a></li>
		            <li><a href="#">Browsers</a></li>
		            <li>
		            	<select>
		            		<option><a href="#">Operating Systems</a></option>
		            		<option><a href="#">Ignored IP Address List</a></option>
		            	</select>
		            </li>
		        </ul>
		    </div>        
	    	
    	
@endsection

